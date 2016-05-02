<?php

$username = $_POST['username'];
$password = $_POST['password'];

//All about sessions..........
if($username =='username' && $password=='password') {

 session_start();
 $_SESSION['access_level'] = "standarduser";
}

header('location:homepage.phplab');




//ALL ABOUT COOKIES.....
/**
if($username =='username' && $password=='password'){
 setcookie('access_level', 'standarduser');
}
header('location:homepage.phplab');
**/