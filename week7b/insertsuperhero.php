<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>superheroform</title>
</head>
<body BGCOLOR="#F5FFFA">
<header style="background-color: darkgreen">
    <h1 style="color: silver" align="center"> SUPERHERO FORM  </h1>
</header>


<?php


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$power = $_POST["powers"];


echo "firstname: " . $firstname . "<br> " . "lastname:" . " " . $lastname . " <br>";
echo " Main Superhero Power:  " . " " . $power;


?>



<footer>
    <p style="background-color: darkgreen" align="center"  >SUPERHERO Copyright(c) 2016 </p>
</footer>


</body>
</html>
