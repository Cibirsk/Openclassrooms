<?php

    $recette1=array(
        "auteur" => "Bob",
        "nom" => "cassoulet",
        "temps de preparation" => "2 heures",
        "niveau d'expérience" => "avancée",
        "ingrédients" => "haricots, lard, canard"
    );


    foreach($recette1 as $clef => $value){
        echo "$clef = $value <br>";
    }
?>