<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>




<body>


<h1> Welcome! </h1>
<br>
<?php

$username = $_GET['username'];



echo "<h4> Current user Login as: {$username} </h4>";

?>
<br>

<?php
include ("connection.php");

echo "<br>";


$user_SQL = "SELECT username, password
               FROM users

";

$user_SQL_Query = mysqli_query($db, $user_SQL);

echo'<h2> TABLE DISPLAYS <strong style="color: darkred"> ALL MOVIES </strong> FROM THE MARVELMOVIES DATABASE </h2>';
echo'<br>';

echo "<table border = '1'>";

echo "<tr>";


echo "<th> UserNames </th>";
echo "<th> Passwords </th>";

echo "</tr>";

$indx = 1;
while($row = mysqli_fetch_array($user_SQL_Query, MYSQLI_ASSOC)) {

    $username = $row['username'];
    $password = $row['password'];

    echo "<tr>";

    echo "<td>  $username  </td>";
    echo "<td> $password </td>";


    echo "</tr>";

    $indx++;
}

echo "</table>";

?>



</body>
</html>

