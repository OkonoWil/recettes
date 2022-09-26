@extends('layouts.app')

@section('title', 'Recette')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Recette - {{$recette->name}}
    </h1>
    
    <div class="ok-min-h w-[500px] flex justify-center flex-row">
        <section class="my-2 flex flex-col w-[500px] overflow-hidden relative">
            <img class="h-48 w-500px object-cover" src="{{Storage::url($recette->image)}}" alt="{{$recette->name}}">
            <div class="absolute w-auto top-2 left-2 bg-green-400 text-white p-1 text-sm rounded-lg">
                <i class="fa-solid fa-clock mx-1"></i>{{$recette->duree}}
            </div>
            <div>
                <div class="flex flex-row justify-between">
                    <span>Auteur : {{$recette->user->username}}</span>
                    <span>Ajouter le : {{$recette->created_at}}</span>
                </div>
            </div>
        </section>
       
        
    </div>
@endsection