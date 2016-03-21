<?php

$forename = $_POST["forename"];
$surname = $_POST["surname"];
if($forename && $surname !=empty($_POST)){

    echo "Hello " . $forename . " " . $surname;
}else

echo "both field required";


?>
