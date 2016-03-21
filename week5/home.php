
<?php
include("connection.php");

?>

<head>
<meta charset="utf-8">
    <title> Welcome </title>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>


<?

$sql = "SELECT '$username' FROM users";
$result = $db->query($sql);
while($row = $result->fetch_array())
{
    $username = $row["username"];
}


echo "<li> {$username} </li>" ;

echo "<p> {$username} </p>";


?>



<h1>Hello</h1>



</body>

</html>

