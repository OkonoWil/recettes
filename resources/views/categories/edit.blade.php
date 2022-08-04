@extends('layouts.app')

@section('title', 'Modifier-Categorie')

@section('content')

<h1 class="text-3xl text-orange-500 font-extrabold my-2 ">
    Modifier la categorie
</h1>
<form action="{{route('categories.update', ['categorie' => $categorie])}}" method="POST" class="border-gray-500 border-2 box-border rounded-lg p-4 m-5 mb-36 w-96">
    @csrf
    @method('PUT')
    <div class="w-full flex flex-col">
        <div class="w-full flex flex-col m-1 text-xl box-border">
            <div>
                <label class="id">Id de la catégorie  :</label>
            </div>
            <input type="number" value="{{$categorie->id}}" disabled class="m-1 box-border border-2 rounded-md focus:outline-teal-400 border-gray-500">
            <div>
                <label for="name">Nom de la catégorie :</label>
            </div>
            <input class="m-1 box-border border-2 rounded-md focus:outline-teal-400 @error('name') border-red-400 @else border-gray-500  @enderror" type="text" name="name" value="{{$categorie->name}}">
            @error('name')
                <span class="text-sm text-red-500">{{$message}}</span>
            @enderror
        </div>
        
        <div class="flex justify-center w-full">
            <div class="bg-green-500 m-3  p-2 text-2xl text-white font-bold border rounded-md w-1/2 text-center"><input  class="w-full cursor-pointer" type="submit" value="Modifier"></div>
        </div>
    </div>
</form>
@endsection