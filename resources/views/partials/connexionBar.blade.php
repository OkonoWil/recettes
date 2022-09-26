@isAdmin
    <div class="flex justify-end mb-5 z-20 top-2 right-4 fixed">
@else
    <div class="flex justify-end mb-5">
@endisAdmin
    
    @auth
        <div id="dropdown" class="flex flex-col items-between max-w-xs py-2 px-4 bg-orange-300 border border-orange-500 rounded-md text-white truncate">
            <button id="btntop" class="flex flex-row justify-between items-center w-full font-bold ">
                <span><img src="{{Auth::user()->sexe == 'Homme' ? Storage::url('icon/icons8_user_male_32.png') : Storage::url('icon/icons8_female_user_32.png')}}" alt="" class="inline">{{Auth::user()->username}} <span class="font-extrabold text-orange-500 mr-1">{{Auth::user()->admin ? 'Admin' : '' }}</span></span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div id="bloclinks" class="transition h-0 transition-h ">
                <ul class="pt-3">
                    <li>
                        <a class="hover:font-extrabold hover:text-orange-500" href="{{route('client.auth.profil')}}">Profil</a>
                    </li>
                    <li>
                        <a class="hover:font-extrabold hover:text-orange-500" href="{{route('client.auth.edit')}}">Paramètre</a>
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
