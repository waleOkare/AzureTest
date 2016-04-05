<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>



<h1> Welcome!</h1>



<p> what the fuck is happening </p>

<?php
include ("connection.php");



$sql_display_users = "
           SELECT uid,username
           FROM users
";

$sql = mysqli_query($db, $sql_display_users);

echo '<table border = "1">';
echo '<tr>';

echo '<th> # </th>';
echo '<th> UID </th>';
echo '<th> Username </th>';

echo '</tr>';

$indx = 1;

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

    $uid = $row['uid'];
    $username = $row['username'];





    echo '<tr>';
    echo "<td> $indx  </td>";
    echo "<td> $uid </td>";
    echo "<td> $username</td>";

    echo '</tr>';
   $indx++;

    echo '</table>';
}




?>













</body>
</html>