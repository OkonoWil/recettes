<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function welcome()
    {
        $recettes = Recette::all()->sortBy('created_at');
        return view('welcome', ['recettes' => $recettes]);
    }
    function home()
    {
        $recettes = Recette::all()->sortBy('created_at');
        return view('home', ['recettes' => $recettes]);
    }
}
