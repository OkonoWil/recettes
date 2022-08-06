<div class="flex justify-end mb-5">
    
    @auth
        <div id="dropdown" class="flex flex-col items-between max-w-xs py-2 px-4 bg-orange-300 border border-orange-500 rounded-md text-white truncate">
            <button id="btntop" class="flex flex-row justify-between items-center w-full font-bold ">
                <span><i class="fa-solid fa-user mr-2"></i>{{Auth::user()->username}} <span class="font-extrabold text-orange-500 mr-1">{{Auth::user()->admin ? 'Admin' : '' }}</span></span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div id="bloclinks" class="transition h-0 transition-h ">
                <ul class="pt-3">
                    <li>
                        <a class="hover:font-extrabold hover:text-orange-500" href="#">Profil</a>
                    </li>
                    <li>
                        <a class="hover:font-extrabold hover:text-orange-500" href="#">Paramètre</a>
                    </li>
                    <li>
                        <a class="hover:font-extrabold hover:text-orange-500" href="{{route('auth.logout')}}">Déconnecter</a>
                    </li>
                </ul>
            </div>
            <script src="/js/connexionbar.js"></script>
        </div>
    @else
        <a href="{{route('getlogin')}}" class="text-xl border-2 rounded-3xl pb-1 px-3 border-orange-500 text-orange-400 hover:text-white hover:bg-orange-500 cursor-pointer">Connexion</a>
        <a href="{{route('getregister')}}" class="text-xl border-2 rounded-3xl pb-1 px-3 ml-3 border-orange-500 text-orange-400 hover:text-white hover:bg-orange-500  cursor-pointer">Inscription</a>
    @endauth
</div>
