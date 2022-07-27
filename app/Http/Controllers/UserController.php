<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;



class UserController extends Controller
{
    function getLogin()
    {
        return view('auth.login');
    }
    function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'exists:users,email'],
            'password' => ['required'],
        ]);
        $user = User::query()->where("email", $request->email)->first();
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Invalid credentials']);
        }
        Auth::login($user, $request->remember);
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    function getRegister()
    {
        return view('auth.register');
    }
    function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'sexe' => ['required'],
            'username' => ['required', 'unique:users,username'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'min:4'],
            'passwordconf' => ['required', 'min:4'],
            'condition' => ['accepted']
        ]);
        if ($request->password != $request->passwordconf) {
            return redirect()->back()->withErrors(['passwordconf' => 'Invalid']);
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'sexe' => $request->sexe,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password)
        ]);
        return $this->postLogin($request);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
