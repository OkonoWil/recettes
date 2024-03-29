<nav class="h-full fixed top-0 left-0 box-border px-3 mr-3">
    <a href="{{route('home')}}" class="flex flex-row justify-center text-3xl my-5">
        <img src="{{Storage::url('/icon/tchop_et_yamo.png')}}" alt="Tcop et Yamo">
        <span class="font-extrabold text-orange-400 ml-2">Tchop<span class="text-gray-300">Et</span>Yamo</span>
    </a>
    <ul class="flex flex-col items-start text-xl my-5 pl-5">
        
        <li class="max-w-fit border-b-2 @if(request()->is("/")) text-orange-500 border-b-orange-500 @else  border-b-gray-400 hover:text-amber-500 hover:border-b-amber-500 @endif"><a class=" hover:ml-7" href="{{route('welcome')}}"><i class="fa-solid fa-house"></i> Accueil</li></a>
        <li class="max-w-fit mt-4 border-b-2 @if(request()->is("dashboard") || request()->is("dashboard")) text-orange-500 border-b-orange-500  @else  border-b-gray-400 hover:text-amber-500 hover:border-b-amber-500 @endif" href=""><i class="fas fa-server"></i> Tableau de bord</li></a>
        <li class="max-w-fit mt-4 border-b-2 @if((request()->is("recettes") || request()->is("recettes/*")) && (!request()->is("recettes/create"))) text-orange-500 border-b-orange-500 @else  border-b-gray-400 hover:text-amber-500 hover:border-b-amber-500 @endif"><a class=" hover:ml-7" href="{{route('recettes.index')}}"><i class="fa-solid fa-concierge-bell"></i> Recettes</li></a>
        <li class="max-w-fit mt-4 border-b-2 @if(request()->is("categories") || request()->is("categories/*")) text-orange-500 border-b-orange-500 @else  border-b-gray-400 hover:text-amber-500 hover:border-b-amber-500 @endif"><a class=" hover:ml-7" href="{{route('categories.index')}}"><i class="fa-solid fa-calendar-alt"></i> Catégories</li></a>
        <li class="max-w-fit mt-4 border-b-2 @if(request()->is("recettes/create")) text-orange-500 border-b-orange-500  @else  border-b-gray-400 hover:text-amber-500 hover:border-b-amber-500 @endif"><a class=" hover:ml-7" href="{{route('recettes.create')}}"><i class="fa-solid fa-utensils"></i> Ajouter une recette</a></li>
        <li class="max-w-fit mt-4 border-b-2 @if(request()->is("about")) text-orange-500 border-b-orange-500  @else  border-b-gray-400 hover:text-amber-500 hover:border-b-amber-500 @endif"><a class=" hover:ml-7" href="{{route('home.about')}}"><i class="fa-solid fa-question-circle"></i> A propos</a></li>
        <li class="max-w-fit mt-4 border-b-2 @if(request()->is("contact")) text-orange-500 border-b-orange-500  @else  border-b-gray-400 hover:text-amber-500 hover:border-b-amber-500 @endif"><a class=" hover:ml-7" href="{{route('home.contact')}}"><i class="fa-solid fa-address-card"></i> Contact</a></li>
    </ul>
</nav>
 