<?php

$firstname = $_POST["firstname"];
$surname = $_POST["surname"];

$sex1=   $_POST["male"];
$sex= $_POST["female"];

$power = $_POST["powers"];

echo $firstname . " " . $surname . " <br>";

echo "Gender: " . $sex1 . $sex . " <br> ";

echo "Main Superhero Power:  " . $power;



