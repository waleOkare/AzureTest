<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba0905be48d675');
define('DB_PASSWORD', '73cda819');
define('DB_DATABASE', 'waleokaredb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}

/*
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%laser%'";
$result = $db->query($sql_query);

while($row = $result->fetch_array()){

    echo "<p>" . $row['superheroName'] . "</p>";
}
*/

$result->close();
$db->close();











?>

