<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title> S.H.I.E.L.D </title>
</head>
<h1> Welcome to S.H.I.E.L.D ! </h1>

<img src="http://logonoid.com/images/agents-of-shield-logo.png"/>

<body bgcolor="#6b8e23 "></body>


</html>
<?php

$firstname = $_POST["firstname"];
$surname = $_POST["surname"];
$gender=  $_POST["gender"];
$power = $_POST["powers"];

if($firstname || $surname !=empty($_POST)) {
    echo $firstname . " " . $surname . " <br>";

}else
    echo "Both fields required.....";


echo "Gender: " . $gender. " <br> ";




if($power !=empty($_POST)){
    echo "Main Superhero Power:  " . $power;
}else
    echo "You need to state your powers, NB: Batman is a detective not a superhero incase your going that route.  ";





?>
