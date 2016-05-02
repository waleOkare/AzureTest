
<?php
 include ("db_connect.php");


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["superpower"];


echo "firstName: " . " " . $firstname . " <br> " . " lastName: " . "  " . $lastname .  " <br> ";

echo "Main SuperPower: " . $superpower;



   $sql = " INSERT INTO superheros (firstName, lastName, mainSuperpower)
               VALUES ('$firstname', '$lastname', '$superpower')";


if(mysqli_query($db,$sql)) {
 }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("location:index.phplab");


?>

