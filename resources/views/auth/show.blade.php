@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Bienvenue @if(Auth::user()->sexe == 'Homme') monsieur @else madame @endif{{Auth::user()->name}}
    </h1>
    
    <div class="ok-min-h w-[500px] flex justify-center flex-row">
        <section class="my-2 flex flex-col w-[500px] overflow-hidden relative">
            
        </section>
       
        
    </div>
@endsection