<?php
include("connection.php");


if(empty($_POST["username"]) || empty($_POST["password"])){

       echo "Both fields are required in the parameter.";

}else {


    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT uid
            FROM users
            WHERE username='$username'
            AND
          password='$password'";


    $result = mysqli_query($db, $sql);


    if (mysqli_num_rows($result) == 1) {
        header("location: welcome.php?username=$username"); // Redirecting To another Page
    } else {
        echo " You have entered the wrong Login details.";
    }

}

