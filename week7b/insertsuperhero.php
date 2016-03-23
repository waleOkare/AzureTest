<?php
include ("db_connect.php");




$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$superpowers = $_POST["superpowers"];

   $sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower)
   VALUES ('$firstname', '$lastname', '$superpowers')";

if(mysqli_query($db,$sql)) {
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.php");


?>