@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Catégories
    </h1>
    @isAdmin
        <a class="bg-green-400 text-bold text-xl border rounded-md cursor-pointer" href="{{route('categories.create')}}">
            Ajouter une catégorie
        </a>
    @endisAdmin
    <div class="min-h-screen">
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
            <p>Aucune catégorie</p>
        @endforelse

    </div>
@endsection