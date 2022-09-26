<?php

namespace App\Http\Controllers\Client;

use App\Models\Recette;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function welcome()
    {
        $recettes1 = Recette::all()->sortByDesc('created_at')->take(4);
        $recettes2 = Recette::all()->sortByDesc('vue')->take(4);
        return view('client.welcome', ['recentes' => $recettes1, 'populaires' => $recettes2]);
    }
    function contact()
    {
        return view('client.home.contact');
    }
    function send(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required'],
            'tel' => ['required'],
            'message' => ['required', 'min:20']
        ]);
        $emailMessage = "Nom :  $request->name \t Email :  $request->email \t Tel :  $request->tel  \n\n$request->message";
        mail('okonowilfried@gmail.com', 'TchopEtYamo contact page', $emailMessage);
        return redirect()->route('client.home.contact');
    }
    function about()
    {
        return view('client.home.about');
    }
}
