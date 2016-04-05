<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<?php

$username = $_POST['username'];

echo" Current user Login has "  . " ".  $username;
echo'<br>';

?>

<h1> Welcome!</h1>

<br>
<br>
<br>

<?php
include ("connection.php");
echo '<br>';

$sql_display_users = "
SELECT username
FROM users
";

$sql = mysqli_query($db, $sql_display_users);

$indx = 1;

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

    $username = $row['username'];

    echo $indx . " " . $username;
   $indx++;

}


?>













</body>
</html>