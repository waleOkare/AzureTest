<?php

$forename = $_POST["forename"];
$surname = $_POST["surname"];

/*  If both fields are Left empty, form will echo both field required.  */
if($forename || $surname !=empty($_POST)){

    echo "Hello " . $forename . " " . $surname;
}else

echo "A field required, you cannot submit an empty form";



?>
