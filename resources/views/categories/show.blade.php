@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Catégorie - {{$categorie->name}}
    </h1>
    
    <div class="ok-min-h">
       @empty($categorie->recettes)
            <p>Aucune catégorie</p>
       @else
            <section class="my-2">
                @isAdmin
                    <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
                        <span>{{$categorie->name}}</span>
                        <span>
                            <a href="{{route('categories.edit', ['categorie' => $categorie])}}" class="text-green-500 px-2 py-1 rounded-md hover:text-white hover:bg-green-500">Modifier</a>
                            <form action="{{route('categories.delete',['categorie' => $categorie])}}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" id="btn_delete" value="Supprimer" class="text-red-400 px-2 py-1 rounded-md hover:text-white hover:bg-red-400">
                            </form>
                        </span>
                    </div>
                    @else
                    <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
                        <span></span>
                        <span>
                            <a  href="{{route('categories.show', ['categorie' => $categorie])}}" class="px-2 py-1 rounded-md hover:text-white hover:bg-orange-500">Voir plus</a>
                        </span>
                    </div>
                @endisAdmin
                <div class="grid grid-cols-4 gap-5">
                    @forelse ( $recettes as $recette)
                        @include('partials.carte')           
                    @empty
                        <p>Aucune recette</p>
                    @endforelse
                </div>
            </section>
       @endempty
        <div class="flex justify-center mt-10">
            <div class="w-36 flex justify-around">
                {{$recettes->links('pagination::tailwind')}}
            </div>
        </div>
    </div>
    <script src="/js/btn_delete.js"></script>
@endsection