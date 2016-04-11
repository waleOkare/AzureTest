<?php

$username = $_POST['username'];
$password = $_POST['password'];


if($username =='mike' && $password=='mysecretpassword'){
 setcookie('access_level', 'standarduser');
}

header('location:homepage.php');
