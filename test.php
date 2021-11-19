<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

    $myVar="non";
    if($myVar=="non"){
        echo "la variable étant $myVar c'est refusé";
    }
    elseif($myVar=="oui"){
        echo "la réponse étant $myVar vous pouvez entrer";
    }
    else{
        echo "il me faut une réponse";
    }

   ?>
</body>
</html>