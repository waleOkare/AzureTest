<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>



<h1> Welcome!</h1>





<?php
include ("connection.php");

$username = $_GET['username'];

echo '<h3>Current user logged in as :  </h3> ' .$username;


$sql_display_users = "
           SELECT uid,username
           FROM users
";

$sql = mysqli_query($db, $sql_display_users);

echo '<table border = "1">';

echo '<tr>';

echo "<th> # </th>";
echo "<th> uid </th>";
echo "<th> Username </th>";

echo "</tr>";

$indx = 1;
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

    $uid = $row['uid'];
    $username = $row['username'];


    echo "<tr>";
    echo "<td> $indx  </td>";
    echo "<td> $uid </td>";
    echo "<td> $username</td>";

    echo "</tr>";
   $indx++;


}
echo '</table>';



?>













</body>
</html>