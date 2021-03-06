@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-top bg-cover bg-no-repeat h-96 w-full box-border pl-7 pb-14 flex justify-start items-end font-bold text-white text-3xl "
    style="background-image: url('/storage/images/bg/bg4.jpg')">
    <p>
        Bienvenue à <span class="font-extrabold text-orange-500 ">Tchop<span class="text-gray-400">Et</span>Yamo</span>
        <br> Votre site de recette de référence
    </p>
</div>

<section class="my-2">
    <a href="#" class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100"><span>Recettes les plus populaires</span><span>Voir plus</span></a>
    <div>
        @forelse ($recettes as $recette)
            
        @empty
            <p>Aucune recette</p>
        @endforelse
    </div>
</section>
<section class="mt-2 mb-4">
    <a href="#" class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100"><span>Recettes les plus récentes</span><span>Voir plus</span></a>
    <div>
        @forelse ($recettes as $recette)
            
        @empty
            <p>Aucune recette</p>
        @endforelse
    </div>
</section>

@endsection