@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Catégories
    </h1>
    @isAdmin
        <a class="bg-green-400 text-bold text-xl w-56 font-bold hover:bg-green-500 m-1 text-white p-2 border rounded-md cursor-pointer" href="{{route('categories.create')}}">
            Ajouter une catégorie
        </a>
    @endisAdmin
    <div class="min-h-screen">
        @forelse ($categories as $categorie)
            <section class="my-2">
                @isAdmin
                    <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
                        <span>{{$categorie->name}}</span>
                        <span>
                            <a  href="{{route('categories.show', ['categorie' => $categorie])}}" class="px-2 py-1 rounded-md hover:text-white hover:bg-orange-500">Voir plus</a>
                            <a href="{{route('categories.edit', ['categorie' => $categorie])}}" class="text-green-500 px-2 py-1 rounded-md hover:text-white hover:bg-green-500">Modifier</a>
                            <form action="" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Supprimer" class="text-red-400 px-2 py-1 rounded-md hover:text-white hover:bg-red-400">
                            </form>
                        </span>
                    </div>
                    @else
                    <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
                        <span>{{$categorie->name}}</span>
                        <span>
                            <a  href="{{route('categories.show', ['categorie' => $categorie])}}" class="px-2 py-1 rounded-md hover:text-white hover:bg-orange-500">Voir plus</a>
                        </span>
                    </div>
                @endisAdmin
                <div>
                    @forelse ($categorie->recettes as $recette)
                        @include('partials.carte')           
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