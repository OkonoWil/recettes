<?php

namespace App\Http\Controllers\Admin;

use App\Models\Recette;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::orderBy('name')->paginate(3);

        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
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
            'name' => ['required', 'unique:Categories,name']
        ]);
        Categorie::query()->create($request->except(['_token']));
        return redirect()->route('admin.categories.index');
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
        return view('admin.categories.show', ['categorie' => $categorie, 'recettes' => $recettes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('admin.categories.edit', ['categorie' => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $this->validate($request, [
            'name' => ['required', 'unique:Categories,name,' . $categorie->id]
        ]);
        $categorie->name = $request->name;
        $categorie->updated_at = now();
        $categorie->save();

        $categories = Categorie::all();
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        Categorie::findOrFail($categorie->id)->delete();
        return redirect()->route('admin.categories.index');
    }
    public function search(Request $request)
    {
        $categories = Categorie::where('name', 'like', "%$request->search%")->paginate(3);
        return view('categories.index', ['categories' => $categories]);
    }
}
