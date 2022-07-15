<?php

//
function recetteValide(array $recette): bool
{
    if (array_key_exists('est_valide', $recette)) {
        $estValide = $recette['est_valide'];
    } else {
        $estValide = false;
    }

    return $estValide;
}

function afficherAuteur(string $email, array $users): string
{
    foreach ($users as $person) {
        if ($email == $person['email']) {
            return $person['nom'];
        }
    }
}

function getRecette(array $recettes): array
{
    $valideRecettes = [];

    foreach ($recettes as $recette) {
        if (recetteValide($recette))
            $valideRecettes[] = $recette;
    }
    return $valideRecettes;
}
