@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl text-orange-500 font-extrabold @isAdmin my-7 @else mt-20 mb-7 @endisAdmin ">
        Contaxtez-nous !!!
    </h1>
    
    <form action="#" method="post">
        <h1>Contactez-nous</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label for="nom">Votre Prénom</label>
                    <input type="text" autocomplete="off">
                    <i class="fas fa-user"></i>
                </div>
                <div class="groupe">
                    <label for="email">Votre adresse e-mail</label>
                    <input type="email" autocomplete="off">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="groupe">
                    <label for="email">Votre téléphone</label>
                    <input type="tel" autocomplete="off">
                    <i class="fas fa-mobile"></i>
                </div>
            </div>
            <div class="droite">
                <div class="groupe">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Saisissez ici..."></textarea>
                </div>
            </div>
        </div>
        <div class="pied-formulaire">
            <input type="submit" value="Envoyer le message">
        </div>
    </form>
@endsection