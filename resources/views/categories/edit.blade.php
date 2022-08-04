@extends('layouts.app')

@section('title', 'Modifier-Categorie')

@section('content')
<h1 class="text-3xl text-orange-500 font-extrabold my-7">
    Catégories / Modifier
</h1>
<form action="{{route('categories.update', ['categorie' => $categorie])}}" method="post" class="text-xl m-5">
    @csrf
    @method('PUT')
    <div class="flex flex-row">
        <label for="id">Id de la catégorie :</label>
        <input type="number" name="id" value="{{$categorie->id}}" disabled>
    </div>
    <div>
        <label for="name">Nom de la catégorie :</label>
        <input type="text" name="name" id="name" value="{{$categorie->name}}">
    </div>
    <div>
        <input type="submit" value="Modifier">
    </div>
</form>
@endsection