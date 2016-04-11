<?php

$username = $_POST['username'];
$password = $_POST['password'];




if($username =='wale' && $password=='mandi'){
 setcookie('access_level', 'standarduser');
}

header('location:homepage.php');
