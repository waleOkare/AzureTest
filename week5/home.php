
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
$username = $_GET["username"];

echo $username;

echo "<p> {$username} </p>";


?>



<h1>Hello</h1>



</body>

</html>

