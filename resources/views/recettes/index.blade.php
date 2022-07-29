@extends('layouts.app')

@section('title', 'Recettes')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-2 @else mt-20 mb-4 @endisAdmin ">
        Recettes
    </h1>
    <a class="bg-green-400 text-bold text-xl w-52 font-bold hover:bg-green-500 hover:translate-y-2 m-1 text-white p-2 border rounded-md cursor-pointer" href="{{route('recettes.create')}}">
        Ajouter une recette
    </a>
    <div class="min-h-screen mx-2 my-1">
        @forelse ($categories as $categorie)
            <section class="my-2">
                <a href="#" class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100"><span>Recettes les plus populaires</span><span>Voir plus</span></a>
                <div>
                    @forelse ($categorie->recettes as $recette)
                        
                    @empty
                        <p>Aucune recette</p>
                    @endforelse
                </div>
            </section>
        @empty
            <p>Aucune recette</p>
        @endforelse

    </div>
@endsection