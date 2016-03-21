<?php

$firstname = $_POST["firstname"];
$surname = $_POST["surname"];

$sex = $_POST["male"] && $_POST["female"];

echo $firstname . " " . $surname . " <br>";

echo $sex;

