<?php

$username = $_POST['username'];
$password = $_POST['password'];


if($username =='username' && $password=='password'){
 setcookie('access_level_cookie', 'standarduser');
}

header('location:homepage.php');
