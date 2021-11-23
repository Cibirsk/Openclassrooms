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

$monTab=[
    "fruits"=>["pomme","poire","banane"],
    "animaux"=>["chien","chat","singe"],
    "pays"=>["France","Espagne","Allemagne"]
];

echo sprintf("il y a %s ainsi que %s et enfin %s", 
$monTab["fruits"][0],$monTab["animaux"][1],$monTab["pays"][0] );

?>
</body>
</html>