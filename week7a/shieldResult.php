<?php

$firstname = $_POST["firstname"];
$surname = $_POST["surname"];

$male=   $_POST["male"];
$female= $_POST["female"];
$power = $_POST["powers"];

echo $firstname . " " . $surname . " <br>";

echo "Gender: " . $male . $female . " <br> ";

echo "Main Superhero Power:  " . $power;



