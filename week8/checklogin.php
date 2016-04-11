<?php

$username = $_POST['username'];
$password = $_POST['password'];

$username = 'Mike';
$password = 'mysecretpassword';


if($username =='username' && $password=='password'){
 setcookie('access_level_cookie', 'standarduser');
}

header('location:homepage.php');
