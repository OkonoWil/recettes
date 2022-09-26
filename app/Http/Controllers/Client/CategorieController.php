<?php

namespace App\Http\Controllers\Client;

use App\Models\Recette;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::orderBy('name')->paginate(3);

        return view('client.categories.index', ['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        $recettes = Recette::where('categorie_id', $categorie->id)
            ->orderBy('name')
            ->paginate(8);
        return view('client.categories.show', ['categorie' => $categorie, 'recettes' => $recettes]);
    }

    public function search(Request $request)
    {
        $categories = Categorie::where('name', 'like', "%$request->search%")->paginate(3);
        return view('client.categories.index', ['categories' => $categories]);
    }
}
