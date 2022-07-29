<header class="fixed flex flex-row box-border justify-between pt-2 w-full bg-gray-50 top-0 left-0">
    <div class="flex flex-row my-1">
        <div class="mx-2">
            <i class="fa-solid fa-bars text-2xl cursor-pointer" title="Menu"></i>
        </div>
        <div>
            
            <a href="{{route('home')}}" class="flex flex-row justify-center text-2xl">
                <img src="{{Storage::url('icon/tchop_et_yamo.png')}}" alt="Tcop et Yamo">
                <span class="font-extrabold text-orange-400 ml-2">Tchop<span class="text-gray-300">Et</span>Yamo</span>
            </a>

    </div>
    </div>
    <div>
        <form action="{{route('welcome')}}" method="post" class="border rounded-2xl bg-white h-10 px-2 box-border truncate flex items-center  " >
            @csrf
            <input type="text" name="rechercher" placeholder="Taper ici pour rechercher une recette" class="focus:outline w-72">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div>
        @include('partials.connexionBar')
    </div>
</header>