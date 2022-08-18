@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold flex flex-col @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Bienvenue @if(Auth::user()->sexe == 'Homme') monsieur @else madame @endif{{Auth::user()->name}}
        <span class="text-gray-500 font-normal text-base">Inscrit le {{Auth::user()->created_at->format('Y-d-m')}}</span>
    </h1>
    
    <div class="ok-min-h flex flex-col sm:flex-row">
        <section class="my-2 flex flex-col">
            <form action="{{route('auth.store')}}" method="post">
                @csrf
                <div class="m-1 flex flex-col sm:flex-row w-full box-border">
                    <div class="mr-1 sm:mr-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label for="name">Nom :</label>
                        </div>
                        <input type="text" class="block p-1 sm:p-2.5 sm:mx-2 my-1 bg-gray-50 text-gray-600 sm:w-full border border-gray-500 box-border rounded-md" value="{{Auth::user()->name}}" disabled>
                    </div>
                    <div class="mr-1 sm:mx-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label for="username">Pseudo :</label>
                        </div>
                        <input type="text" class="block p-1 sm:p-2.5 sm:mr-1 my-1 bg-gray-50 text-gray-600 sm:w-full border border-gray-500 box-border rounded-md" value="{{Auth::user()->username}}" disabled>
                    </div>
                </div>
                <div class="m-1 flex flex-col sm:flex-row w-full box-border">
                    <div class="mr-1 sm:mr-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label for="email">Email :</label>
                        </div>
                        <input type="email" class="block p-1 sm:p-2.5 sm:mx-2 my-1 bg-gray-50 text-gray-600 sm:w-full border border-gray-500 box-border rounded-md" value="{{Auth::user()->email}}" disabled>
                    </div>
                    <div class="mr-1 sm:mx-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label for="username">Sexe :</label>
                        </div>
                        <input type="text" class="block p-1 sm:p-2.5 sm:mr-1 my-1 bg-gray-50 text-gray-600 sm:w-full border border-gray-500 box-border rounded-md" value="{{Auth::user()->sexe}}" disabled>
                    </div>
                </div>
            </form>
            <div class="flex flex-col text-xl font-bold m-2 sm:m-5">
                <div class="h-10 p-1 bg-gray-400 text-white flex flex-row justify-between">
                    <span>Nombre de recette :</span>
                    <span>{{Auth::user()->recettes->count()}}</span>
                </div>
                <div class="h-10 p-1 my-2 bg-gray-400 text-white flex flex-row justify-between">
                    <span>Nombre de j'aime :</span>
                    @php
                        $compte = 0;
                    @endphp
                    @forelse (Auth::user()->recettes as $recette)
                        @php
                            $compte += $recette->vue;
                        @endphp
                    @empty
                        
                    @endforelse
                    <span>{{$compte}}</span>
                </div>
            </div>
        </section>

        <section class="mx-0 sm:mx-5">
            <h1 class="text-xl text-gray-400 font-semibold">
                Vos recettes
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">
                @forelse (Auth::user()->recettes as $recette)
                    @include('partials.carte') 
                @empty
                    <p>Aucune recette</p>
                @endforelse
            </div>
        </section>
    </div>

        
    </div>
@endsection