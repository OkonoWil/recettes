<header class="z-10 fixed flex flex-row box-border justify-between pt-2 w-full bg-gray-50 top-0 left-0">
    <div class="flex flex-row my-1">
        <nav>
            @include('partials.menu')
            <div class="mx-2 toggle">
                <i class="fa-solid fa-bars text-2xl cursor-pointer ouvrir" title="Menu"></i>
                <i class="fa-solid fa-xmark fermer text-2xl cursor-pointer fermer" title="Fermer"></i>
            </div>
        </nav>
        <div class="hidden sm:block">
            <a href="{{route('welcome')}}" class="flex flex-row justify-center text-2xl">
                <img src="{{Storage::url('icon/tchop_et_yamo.png')}}" alt="Tcop et Yamo">
                <span class="hidden md:inline font-extrabold text-orange-400 ml-2">Tchop<span class="text-gray-300">Et</span>Yamo</span>
            </a>

    </div>
    </div>
    <div>
        <form action="{{route('welcome')}}" method="post" class="border rounded-2xl bg-white h-10 px-2 box-border truncate flex items-center  " >
            @csrf
            <input type="text" name="rechercher" placeholder="Taper ici pour rechercher une recette" class="focus:outline-none sm:w-72">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div>
        @include('partials.connexionBar')
    </div>
    <script src="/js/btn_menu.js"></script>
</header>