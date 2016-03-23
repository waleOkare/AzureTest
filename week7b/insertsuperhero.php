<?php
include ("db_connect.php");




$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpowers = $_POST["superpowers"];

   $sql = "INSERT INTO superheros (firstname, lastname, mainSuperpower)
   VALUES ('$firstname', '$lastname', '$superpowers')";

if(mysqli_query($db,$sql)) {
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");


?>