@extends('layouts.app')

@section('title', 'Ajouter-Recette')

@section('content')
<h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-2 @else mt-20 mb-4 @endisAdmin ">
    Ajouter une recette
    </h1>
    <form action="{{route('recettes.store')}}" method="POST" enctype="multipart/form-data" class="text-base text-gray-600 flex flex-col items-center">
        @csrf


        {{-- ----------- Name & image ----------- --}}
        <div class="flex flex-row box-border p-2 border-2 border-gray-400 mb-2 max-w-3xl">
            <div class="w-96 flex flex-col m-1 box-border">
                <div>
                    <label for="name">Nom de la recette :</label>
                    @error('name')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="focus:ring-0 focus:border-transparent focus:outline border-2 rounded-md @error('name') border-red-400 @else border-gray-500  @enderror" type="text" name="name" id="name" value="{{old('name')}}" placeholder="Entrez le nom de la recette">
            </div>
            <div class="w-96 flex flex-col m-1 box-border">
                <div>
                    <label for="image">Photo de la recette :</label>
                    @error('image')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <input class="border-2 rounded-md @error('characteristic') border-red-400 @else border-gray-500  @enderror" type="file" name="image" id="image" placeholder="Sélectionnez une photo pour la recette" accept="image/png, image/jpeg">
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
                    @error('ingredients')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div id="ingredients" class="flex flex-row flex-wrap p-1 my-1 mx-2 justify-evenly">
                    <input type="text" name="ingredients[]" id="" class="focus:ring-0 focus:border-transparent focus:outline border-2 rounded-md border-gray-500 p-1 my-1 mx-2">
                </div>
                <div class="flex flex-row justify-end">
                    <span id="btnIng" class="cursor-pointer bg-green-400 border-2 border-green-700 rounded-xl text-white font-bold p-2 m-2">Ajouter un ingrédient</span>
                </div>
            </div>
        
        </div>  


        {{-- ----------- Cook ----------- --}}
        <div class="border-2 border-gray-400 m-2 max-w-3xl box-border p-2 ">
            <div class="flex flex-col m-2">
                <div>
                    <label>Etape de préparation :</label>
                    @error('preparation')
                    <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <div id="preparations" class="flex flex-row flex-wrap p-1 my-1 mx-2 justify-evenly">
                    <input type="text" name="preparation[]" id="" class="focus:ring-0 focus:border-transparent focus:outline border-2 rounded-md border-gray-500 p-1 my-1 mx-2">
                </div>
                <div class="flex flex-row justify-end">
                    <span id="btnPrepa" class="cursor-pointer bg-green-400 border-2 border-green-700 rounded-xl text-white font-bold p-2 m-2">Ajouter une étape </span>
                </div>
            </div>
        
        </div>  

            
            <div class="flex justify-center w-1/2 m-2">
                <div class="bg-green-500 m-3 mr-0 p-2 text-2xl text-white font-bold border rounded-md w-52 text-center"><input  class="w-full cursor-pointer" type="submit" value="ADD"></div>
            </div>
    </form>
    <script src="/js/create_recette.js"></script>
@endsection