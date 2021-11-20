<?php

    $recette1=[
    [
        "auteur" => "Bob",
        "nom" => "cassoulet",
        "temps_prep" => "2 heures",
        "niveau_xp" => "avancée",
        "ingrédients" => "haricots, lard, canard"
    ],
    [
        "auteur" => "Mike",
        "nom" => "salade",
        "temps_prep" => "10 minutes",
        "niveau_xp" => "simple",
        "ingrédients" => "salade, tomates"
    ],
    [
        "auteur" => "Dan",
        "nom" => "couscous",
        "temps_prep" => "1 heure",
        "niveau_xp" => "moyen",
        "ingrédients" => "semoule, raison, menthe"
    ]
    ];


    foreach($recette1 as $value){
        echo "C'est $value[auteur] qui a conçu $value[nom] <br>";
        echo "Cela nécessite un niveau $value[niveau_xp] et vous prendra $value[temps_prep]<br>";
    }
?>