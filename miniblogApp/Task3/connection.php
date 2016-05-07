
<!--- This is the connection file to the Sql database. -->
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b6ec05aff05f02');
define('DB_PASSWORD', '6889ce42');
define('DB_DATABASE', 'CMM007ALDB-1511463');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db) {

  //  echo "Successful Connection to the database <br>"  ;
} else {

    echo "Failed to connect to the database";
}




?>


