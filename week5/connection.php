<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba0905be48d675');
define('DB_PASSWORD', '73cda819');
define('DB_DATABASE', 'waleokaredb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if ($db) {
        echo 'Successful Connection to the database <br>';
    } else {
        echo 'Failed to connect to the database';
    }


?>

