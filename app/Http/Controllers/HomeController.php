<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function welcome()
    {
        $recettes1 = Recette::all()->sortByDesc('created_at')->take(4);
        $recettes2 = Recette::all()->sortByDesc('vue')->take(4);
        return view('welcome', ['recentes' => $recettes1, 'populaires' => $recettes2]);
    }
    function contact()
    {
        return view('home.contact');
    }
    function send(Request $request)
    {
        $this->validate($request, []);
        return redirect()->route('home.contact');
    }
    function about()
    {
        return view('home.about');
    }
    function home()
    {
        $recettes1 = Recette::all()->sortByDesc('created_at')->take(4);
        $recettes2 = Recette::all()->sortByDesc('vue')->take(4);
        return view('home', ['recentes' => $recettes1, 'populaires' => $recettes2]);
    }
}
