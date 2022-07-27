@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="border-2 rounded border-teal-500 p-3 w-96 box-border ">
    <div class="flex flex-row justify-center m-2">
        <h2 class="text-xl">Connexion</h2>
    </div>
    <form action="{{route('postlogin')}}" method="post" class="box-border">
        @csrf
        <div class=" box-border w-full mb-1">
            <input type="email" name="email" id="email" placeholder="Adresse e-mail" class="block p-2.5 bg-gray-50 text-gray-600 w-full box-border border border-gray-500 rounded-md @error('email') mb-0 @enderror" value="{{old('email')}}">
            @error('email')
                <span class="text-sm text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class=" box-border">
            <input type="password" name="password" id="password" placeholder="Mot de passe" class="block p-2.5 bg-gray-50 text-gray-600 w-full border border-gray-500 rounded-md @error('password') mb-0 @enderror">
            @error('password')
                <span class="text-sm text-red-500">{{$message}}</span>
            @enderror
        </div>
        <div class="flex flex-row justify-between box-border">
            <div>
                <input type="checkbox" name="remenber_me" id="remenber_me">
                <label for="remenber_me">Remenber me</label>
            </div>
            <div>
                <a href="" class="text-teal-500">Mot de passe oublié?</a>
            </div>
        </div>
        <div class="flex flex-row justify-center m-3 box-border">
            <input type="submit" value="Login" class="bg-teal-700 text-white font-bold border rounded-md text-center px-5 py-2">
        </div>
        <div>
            <p>Vous n'avez pas de compte? <a href="{{route('getregister')}}" class="text-teal-500">S'inscrire</a></p>
        </div>
    </form>
</div>
@endsection