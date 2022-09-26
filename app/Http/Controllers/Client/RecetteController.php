<?php

namespace App\Http\Controllers\client;

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
    public function index(Request $request)
    {
        $recettes1 = Recette::where('validation', 1)->orderByDesc('vue')->take(5)->get(['id', 'name', 'image', 'duree', 'vue', 'user_id']);
        $recettes2 = Recette::where('validation', 1)->latest()->take(5)->get(['id', 'name', 'image', 'duree', 'vue', 'user_id']);
        $recettes3 = Recette::where('validation', 1)->orderBy('duree')->take(5)->get(['id', 'name', 'image', 'duree', 'vue', 'user_id']);

        return view('client.recettes.index', ['populaires' => $recettes1, 'recentes' => $recettes2, 'rapides' => $recettes3]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('client.recettes.create', ['categories' => $categories]);
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
            'duree' => ['required'],
            'categorie_id' => ['required'],
            'ingredients.*' =>  ['required']
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
            'user_id' => $request->user()->id,
            'categorie_id' => $request->categorie_id == 0 ? 1 : $request->categorie_id,
            'image' => $path,
            'duree' => $request->duree,
            'preparation' => $preparation,
            'ingredients' => $ingredients,
            'other_categorie' => $request->categorie_id == 0 ? $request->other_categorie : "",
        ]);

        return redirect()->route('client.recettes.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        $recette->vue += 1;
        $recette->save();
        return view('client.recettes.show', ['recette' => $recette]);
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

    public function recentes()
    {
        $recettes = Recette::where('validation', 1)->latest()->paginate(8);
        return view('client.recettes.list', ['recettes' => $recettes, 'name' => 'Recettes les plus récentes']);
    }
    public function populaires()
    {
        $recettes = Recette::where('validation', 1)->orderByDesc('vue')->paginate(8);
        return view('client.recettes.list', ['recettes' => $recettes, 'name' => 'Recettes les plus populaires']);
    }
    public function rapides()
    {
        $rapides = Recette::where('validation', 1)->orderBy('duree')->paginate(8);
        return view('client.recettes.list', ['recettes' => $rapides, 'name' => 'Recettes avec le meilleur temps de cuissons']);
    }
    public function search(Request $request)
    {
        $search = Recette::where('name', 'like', "%$request->search%")->paginate(8);

        return view('client.recettes.list', ['recettes' => $search, 'name' => 'Resultat de la recherche de "' . "$request->search" . '"']);
    }
}
