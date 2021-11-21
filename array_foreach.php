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
    echo "<h1>Liste des recettes</h1>";
    
    foreach($recettes as $value){
        if(array_key_exists("is_enabled",$value) && $value["is_enabled"]==true){
            echo "<h3>$value[nom]</h3><br>";
            echo "Créé par: $value[auteur] <br>";
            echo "Ingrédients: $value[ingrédients] <br>";

        }
    }

    $monTab=["1er"=>1,"2nd"=>2,"3eme"=>3,"4eme"=>4,"5eme"=>5,"6eme"=>6];
    foreach($monTab as $key => $value){
        echo "$key => $value<br>";
    }
*/
    $monTab2=[
        "fruits"=>["pomme","poire","banane"],
        "animaux"=>["chien","chat","singe"],
        "pays"=>["France","Espagne","Allemagne"]
    ];
    foreach($monTab2 as $key => $value){
        echo "<h3>$key</h3> <br>";
        foreach($value as $valeur){
            echo "$valeur <br>";
        }
    }
    
?>


