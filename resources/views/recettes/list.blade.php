@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        {{$name}}
    </h1>
    
    <div class="ok-min-h">
       @empty($recettes)
            <p>Aucune recettes</p>
       @else
            <section class="my-2">
                <div class="text-xl text-orange-500 font-bold flex flex-row justify-between px-4 py-2 mt-4 mb-2 bg-orange-100">
                    <span class="h-4"></span>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-3 lg:gap-5">
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