<?php

$username = $_POST['username'];
$password = $_POST['password'];

//All about sessions
if($username =='username' && $password=='password') {
 $_SESSION['access_level_session'] = "standarduser";
}

header('location:homepage.php');




//ALL ABOUT COOKIES.....
/**
if($username =='username' && $password=='password'){
 setcookie('access_level', 'standarduser');
}
header('location:homepage.php');
**/