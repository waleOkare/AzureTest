<?php
include ("connection.php");
echo '<br>';
?>
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


$sql_display_users = "
           SELECT uid,username
           FROM users
";

$sql = mysqli_query($db, $sql_display_users);



$indx = 1;

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

    $uid = $row['uid'];
    $username = $row['username'];



    echo "<table border = '1'>";

    echo "<tr>";

    echo "<th> # </th>";
    echo "<th> Username </th>";

    echo "</tr>";

    echo "<tr>";
    echo "<td> $indx  </td>";
    echo "<td> $uid </td>";
    echo "<td> $username</td>";

    echo "</tr>";
   $indx++;

}

echo "</table>";

?>













</body>
</html>