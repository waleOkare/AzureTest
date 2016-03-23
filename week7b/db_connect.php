<?php

$db = mysqli_connect("ap-cdbr-azure-east-c.cloudapp.net","ba0905be48d675","73cda819","waleokaredb");


if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}


$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
$result = $db->query($sql_query);

while($row = $result->fetch_array()){

    echo "<p>" . $row['superheroName'] . "</p>";
}

$result->close();
$db->close();











?>

