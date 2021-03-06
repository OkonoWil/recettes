<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes = Recette::all();
        return view('recettes.index', ['recettes' => $recettes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('recettes.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'unique:recettes,name'],
            'image' => ['required'],
            'categorie_id' => ['required'],
        ]);

        $ingredients = serialize($request->ingredients);
        $preparation = serialize($request->preparation);
        $filename = 'recette' . time() . 'user' . $request->user()->id . '.' . $request->image->extension();
        $path = $request->image->storeAs(
            'images/recettes',
            $filename,
            'public'
        );

        Recette::create([
            'name' => $request->name,
            'categorie_id' => $request->categorie_id == 0 ? 1 : $request->categorie_id,
            'image' => $path,
            'preparation' => $preparation,
            'ingredients' => $ingredients,
            'other_categorie' => $request->categorie_id == 0 ? $request->other_categorie : "",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Recette $recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette)
    {
        //
    }
}
