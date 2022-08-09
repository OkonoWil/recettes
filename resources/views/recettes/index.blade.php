@extends('layouts.app')

@section('title', 'Recettes')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-2 @else mt-20 mb-4 @endisAdmin ">
        Recettes
    </h1>
    <a class="bg-green-400 text-bold text-xl w-52 font-bold hover:bg-green-500 m-1 text-white p-2 border rounded-md cursor-pointer" href="{{route('recettes.create')}}">
        Ajouter une recette
    </a>
    <section class="my-2">
        <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
            <span>Recettes les plus populaires</span>
            <span>
                @if ($populaires->count()>4)
                    <a  href="{{route('recettes.recentes')}}" class="px-2 py-1 rounded-md hover:text-white hover:bg-orange-500">Voir plus</a>
                @endif
            </span>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-3 lg:gap-5">
            @forelse ($populaires->take(4) as $recette)
                @include('partials.carte')           
            @empty
                <p>Aucune recette</p>
            @endforelse
        </div>
    </section>
    <section class="my-2">
        <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
            <span>Recettes les plus récentes</span>
            <span>
                @if ($recentes->count()>4)
                    <a  href="{{route('recettes.populaires')}}" class="px-2 py-1 rounded-md hover:text-white hover:bg-orange-500">Voir plus</a>
                @endif
            </span>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-3 lg:gap-5">
            @forelse ($recentes->take(4) as $recette)
                @include('partials.carte')           
            @empty
                <p>Aucune recette</p>
            @endforelse
        </div>
    </section>
    <section class="my-2">
        <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
            <span>Recettes avec le meilleur temps de cuissons</span>
            <span>
                @if ($rapides->count()>4)
                    <a  href="{{route('recettes.rapides')}}" class="px-2 py-1 rounded-md hover:text-white hover:bg-orange-500">Voir plus</a>
                @endif
            </span>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-3 lg:gap-5">
            @forelse ($rapides->take(4) as $recette)
                @include('partials.carte')           
            @empty
                <p>Aucune recette</p>
            @endforelse
        </div>
    </section>

@endsection