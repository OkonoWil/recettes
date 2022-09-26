@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Mettez à jour vos informations...
    </h1>
    
    <div class="ok-min-h w-[500px] flex justify-center flex-row">
        <section class="my-2 flex flex-col w-[500px] overflow-hidden relative">
            <form action="{{route('client.auth.store')}}" method="post">
                @csrf
                <div class="m-1 flex flex-col sm:flex-row w-full box-border">
                    <div class="mr-1 sm:mr-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label for="name">Nom :</label>
                            @error('name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <input type="text" name="name" id="name" placeholder="Entrez votre nom" class="block p-1 sm:p-2.5 sm:mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('name')==null?Auth::user()->name:old('name')}}">
                    </div>
                    <div class="mr-1 sm:mx-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label for="username">Pseudo :</label>
                            @error('username')
                            <span class="text-sm text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <input type="text" name="username" id="username" placeholder="Entrez votre pseudo" class="block p-1 sm:p-2.5 sm:mr-1 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('username')==null?Auth::user()->username:old('username')}}">
                    </div>
                </div>
                <div class="m-1 flex flex-col sm:flex-row w-full box-border">
                    <div class="mr-1 sm:mr-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label for="email">Email :</label>
                            @error('email')
                            <span class="text-sm text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <input type="email" name="email" id="email" placeholder="Email address" class="block p-1 sm:p-2.5 sm:mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('email')==null?Auth::user()->email:old('email')}}">
                    </div>
                    <div class="mr-1 sm:mr-0 sm:mx-5 w-full sm:w-1/2 box-border">
                        <div>
                            <label>Sexe :</label>
                            @error('sexe')
                            <span class="text-sm text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="block p-1 sm:p-2.5 sm:mr-1 my-1 bg-gray-50 text-gray-600 w-full ">
                            <input type="radio" name="sexe" id="homme" value="Homme" @if (Auth::user()->sexe=='Homme') checked @endif>
                            <label>Homme </label>
                            <input type="radio" name="sexe" id="femme" value="Femme"  @if (Auth::user()->sexe=='Femme') checked @endif>
                            <label>Femme </label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center m-1 sm:m-3 box-border">
                    <input type="submit" value="Modifier" class="bg-teal-700 text-white font-bold border rounded-md text-center px-5 py-2 cursor-pointer">
                </div>
            </form>
        </section>
       
        
    </div>
@endsection