@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin mt-7 mb-2 sm:my-7 @else mt-20 mb-2 sm:mb-7 @endisAdmin ">
        Contactez-nous !!!
    </h1>
    <div class="ok-min-h">
        <form action="{{route('client.home.send')}}" method="post" class=" px-1 sm:px-8  pb-5 w-[95vw] sm:w-[80vw] -z-20 lg:w-[70vw] box-border">
            @csrf
            <div class="corps-formulaire flex flex-wrap flex-col sm:flex-row w-full">
                <div class="gauche w-full sm:w-[45%]">
                    <div class="groupe relative mt-5 flex flex-col">
                        <label for="nom">Votre nom</label>
                        <input type="text" autocomplete="off" value="{{old('name') ?? Auth::check() ? Auth::user()->name : ''}}" name="name" class="mt-1 py-2 pl-7 pr-1 border border-orange-500 outline-orange-400">
                        <i class="fas fa-user absolute l-0 top-8 p-2 text-orange-500"></i>
                    </div>
                    <div class="groupe relative mt-5 flex flex-col">
                        <label for="email">Votre adresse e-mail</label>
                        <input type="email" autocomplete="off" value="{{old('email') ?? Auth::check() ? Auth::user()->email: ''}}" name="email" class="mt-1 py-2 pl-7 pr-1 border border-orange-500 outline-orange-400">
                        <i class="fas fa-envelope absolute l-0 top-8 p-2 text-orange-500"></i>
                    </div>
                    <div class="groupe relative mt-5 flex flex-col">
                        <label for="email">Votre téléphone</label>
                        <input type="tel" autocomplete="off" value="{{old('tel')}}" name="tel" class="mt-1 py-2 pl-7 pr-1 border border-orange-500 outline-orange-400">
                        <i class="fas fa-mobile absolute l-0 top-8 p-2 text-orange-500"></i>
                    </div>
                </div>
                <div class="droite w-full sm:w-[45%] m-0 sm:ml-10">
                    <div class="groupe relative mt-5 flex flex-col h-full">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" placeholder="Saisissez ici..." class="mt-1 p-2 border border-orange-500 resize-none h-[100px] sm:h-[80%] w-full outline-orange-400"></textarea>
                    </div>
                </div>
            </div>
            <div class="pied-formulaire flex justify-center">
                <input type="submit" value="Envoyer le message" class="mt-2 text-white bg-orange-500 cursor-pointer rounded-md py-2 px-5 outline-none transition-transform hover:scale-105">
            </div>
        </form>

    </div>
@endsection