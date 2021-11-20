<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body>
    
</body>
</html>

<?php

    $recettes=[
    [
        "auteur" => "Bob",
        "nom" => "cassoulet",
        "temps_prep" => "2 heures",
        "niveau_xp" => "avancée",
        "ingrédients" => "haricots, lard, canard",
        "is_enabled" => true
    ],
    [
        "auteur" => "Mike",
        "nom" => "salade",
        "temps_prep" => "10 minutes",
        "niveau_xp" => "simple",
        "ingrédients" => "salade, tomates",
        "is_enabled" => true
    ],
    [
        "auteur" => "Dan",
        "nom" => "couscous",
        "temps_prep" => "1 heure",
        "niveau_xp" => "moyen",
        "ingrédients" => "semoule, raison, menthe",
        "is_enabled" => false 
    ]
    ];

/*
    foreach($recette1 as $value){
        echo "C'est $value[auteur] qui a conçu $value[nom] <br>";
        echo "Cela nécessite un niveau $value[niveau_xp] et vous prendra $value[temps_prep]<br>";
    }
*/

    echo "<h1>Liste des recettes</h1>";
    
    foreach($recettes as $value){
        if(array_key_exists("is_enabled",$value) && $value["is_enabled"]==true){
            echo "<h3>$value[nom]</h3><br>";
            echo "Créé par: $value[auteur] <br>";
            echo "Ingrédients: $value[ingrédients]";

        }
    }
?>


