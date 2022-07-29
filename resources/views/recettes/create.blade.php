@extends('layouts.app')

@section('title', 'Ajouter-Recette')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-2 @else mt-20 mb-4 @endisAdmin ">
        Ajouter une recette
    </h1>
    <form action="{{route('recettes.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col items-center">
        @csrf


        {{-- ----------- Name & image ----------- --}}
        <div class="flex flex-row box-border p-2 border-2 border-gray-400 mb-2 text-base max-w-3xl">
            <div class="w-96 flex flex-col m-1 box-border">
                <div>
                    <label for="name">Nom de la recette :</label>
                    @error('name')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="focus:outline border-2 rounded-md @error('name') border-red-400 @else border-gray-500  @enderror" type="text" name="name" id="name" value="{{old('name')}}" placeholder="Entrez le nom de la recette">
            </div>
            <div class="w-96 flex flex-col m-1 box-border">
                <div>
                    <label for="image">Photo de la recette :</label>
                    @error('image')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md @error('characteristic') border-red-400 @else border-gray-500  @enderror" type="file" name="image" id="image"  value="{{old('characteristic')}}"  placeholder="Sélectionnez une photo pour la recette">
            </div>
        </div>
        
        
        {{-- ----------- Categorie ----------- --}}
        <div class=" flex flex-row border-2 border-gray-400 m-2 max-w-3xl box-border p-2 ">
            <div class="w-96 flex flex-col m-2">
                <div>
                    <label>Catégorie :</label>
                    @error('categorie_id')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="flex flex-row flex-wrap">
                    @forelse ($categories as $categorie)
                    <label class="mr-3">
                        <input type="radio" name="categorie_id" value="{{$categorie->id}}"> {{$categorie->name}}
                    </label>
                    @empty
                    <span>Aucune catégorie actuellement disponible</span>
                    @endforelse
                </div>
            </div>
            <div class="w-96 m-2">
                <div>
                    <label><input type="radio" name="categorie_id" value="0"> autre choix </label>
                    <input class="focus:outline border-2 rounded-md border-gray-500" type="text" name="other_categorie" placeholder="Autre" disabled>
                </div>
            </div>
        </div>
        
        
        {{-- ----------- Ingredients ----------- --}}
        <div class="border-2 border-gray-400 m-2 max-w-3xl box-border p-2 ">
            <div class="flex flex-col m-2">
                <div>
                    <label>Ingrédients :</label>
                    @error('ingredient')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div class="flex flex-row flex-wrap p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                    <input type="text" name="" id="" class=" p-1 my-1 mx-2">
                </div>
            </div>
        
        </div>  

            <div class="w-1/2 flex flex-col m-1 text-xl">
                <div>
                    <label for="quantity">Quantity :</label>
                    @error('quantity')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md @error('quantity') border-red-400 @else border-gray-500 @enderror" type="text" name="quantity" value="{{old('quantity')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="stock_min">Stock min :</label>
                <input class="border-2 rounded-md border-teal-500" type="text" name="stock_min" value="{{old('stock_min')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <div>
                    <label for="providor">Providor :</label>
                    @error('providor')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md  @error('providor') border-red-400 @else border-gray-500 @enderror" type="text" name="providor" value="{{old('providor')}}">
            </div>
            <div class="w-1/2 flex flex-col m-1 text-xl">
                <label for="description">description :</label>
                <input class="border-2 rounded-md border-gray-500" type="text" name="description" value="{{old('description')}}">
            </div>
            <div class="flex justify-end w-1/2 m-2">
                <div class="bg-teal-500 m-3 mr-0 p-2 text-2xl text-white font-bold border rounded-md w-1/2 text-center"><input  class="w-full cursor-pointer" type="submit" value="ADD"></div>
            </div>
    </form>

@endsection