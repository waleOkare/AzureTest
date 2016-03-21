<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title> S.H.I.E.L.D </title>
</head>

<body bgcolor="#6b8e23 "></body>


</html>
<?php

$firstname = $_POST["firstname"];
$surname = $_POST["surname"];

$gender=  $_POST["gender"];


$power = $_POST["powers"];

echo $firstname . " " . $surname . " <br>";

echo "Gender: " . $gender. " <br> ";

echo "Main Superhero Power:  " . $power;

?>

