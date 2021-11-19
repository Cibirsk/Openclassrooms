<?php

$yourFirstName=$_POST['firstname'];
$yourName=$_POST['name'];
$result=$_POST['result'];

switch($result){
    case 0:
        echo "pas terrible";
    break;

    case 20:
        echo " $yourFirstName tu es magnifique";
    break;

    default:
        echo "pas de note cher $yourName";
}
?>