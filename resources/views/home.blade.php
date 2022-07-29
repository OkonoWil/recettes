@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1 class="text-3xl text-orange-500 font-extrabold m-5">
    Home
</h1>
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