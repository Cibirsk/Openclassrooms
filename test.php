<?php

    $recette1=[
    [
        "auteur" => "Bob",
        "nom" => "cassoulet",
        "temps de préparation" => "2 heures",
        "niveau_xp" => "avancée",
        "ingrédients" => "haricots, lard, canard"
    ],
    [
        "auteur" => "Mike",
        "nom" => "salade",
        "temps de préparation" => "10 minutes",
        "niveau_xp" => "simple",
        "ingrédients" => "salade, tomates"
    ],
    [
        "auteur" => "Dan",
        "nom" => "couscous",
        "temps de préparation" => "1 heure",
        "niveau_xp" => "moyen",
        "ingrédients" => "semoule, raison, menthe"
    ]
    ];


    foreach($recette1 as $value){
        echo "C'est $value[auteur] qui a conçu $value[nom] <br>";
        echo "Cela nécessite un niveau $value[niveau_xp]<br>";
    }
?>