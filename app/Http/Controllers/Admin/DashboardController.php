<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recette;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request)
    {
        return view('dashboard.index');
    }

    function home()
    {
        $recettes1 = Recette::all()->sortByDesc('created_at')->take(4);
        $recettes2 = Recette::all()->sortByDesc('vue')->take(4);
        return view('home', ['recentes' => $recettes1, 'populaires' => $recettes2]);
    }
}
