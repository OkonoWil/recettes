@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="border-2 rounded border-teal-500 p-3">
    <div class="flex flex-row justify-center m-2">
        <h2 class="text-xl">Créer un compte TchopEtYamo</h2>
    </div>
    <form action="{{route('postregister')}}" method="post">
        @csrf
        <div class="m-1 flex flex-row w-full box-border">
            <div class="mr-5 w-1/2 box-border">
                <div>
                    <label for="name">Nom :</label>
                    @error('name')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input type="text" name="name" id="name" placeholder="Entrez votre nom" class="block p-2.5 mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('name')}}">
            </div>
            <div class="mx-5 w-1/2 box-border">
                <div>
                    <label for="username">Pseudo :</label>
                    @error('username')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input type="text" name="username" id="username" placeholder="Entrez votre pseudo" class="block p-2.5 mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('username')}}">
            </div>
        </div>
        <div class="m-1 flex flex-row w-full box-border">
            <div class="mr-5 w-1/2 box-border">
                <div>
                    <label for="email">Email :</label>
                    @error('email')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input type="email" name="email" id="email" placeholder="Email address" class="block p-2.5 mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('email')}}">
            </div>
            <div class="mx-5 w-1/2 box-border">
                <div>
                    <label for="sexe">Sexe :</label>
                    @error('sexe')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input type="text" name="sexe" id="sexe" placeholder="Votre sexe" class="block p-2.5 mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('sexe')}}">
            </div>
        </div>
        <div class="m-1 flex flex-row w-full box-border">
            <div class="mr-5 w-1/2 box-border">
                <div>
                    <label for="password">Mot de passe :</label>
                    @error('password')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" class="block p-2.5 mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('password')}}">
            </div>
            <div class="mx-5 w-1/2 box-border">
                <div>
                    <label for="passwordconf">Confirmez votre mot de passe</label>
                    @error('passwordconf')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input type="password" name="passwordconf" id="passwordconf" placeholder="Confirmez votre mot de passe" class="block p-2.5 mx-2 my-1 bg-gray-50 text-gray-600 w-full border border-gray-500 box-border rounded-md" value="{{old('passwordconf')}}">
            </div>
        </div>
        
        <div class="m-1">
            <input type="checkbox" name="condition" id="condition">
            <label for="condition"> J'ai lu et j'accepte les <a href="" class="text-teal-500">Termes and Condictions d'utilisation</a></label>
            @error('condition')
                <br><span class="text-sm text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-row justify-center m-3 box-border">
            <input type="submit" value="Create an account" class="bg-teal-700 text-white font-bold border rounded-md text-center px-5 py-2">
        </div>
        <div>
            <p>J'ai déjà un compte? <a href="{{route('getlogin')}}" class="text-teal-500">Connexion</a></p>
        </div>
    </form>
</div>
@endsection