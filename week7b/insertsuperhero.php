<!--
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
 -->
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
  //echo "firstname: " . $firstname . "<br> " . "lastname:" . " " . $lastname . " <br>";
// echo " Main Superhero Power:  " . " " . $superpowers;


?>






<!--
<footer>
    <p style="background-color: darkgreen" align="center"  >SUPERHERO Copyright(c) 2016 </p>
</footer>


</body>
</html>
