
<head>
<meta charset="utf-8">
    <title> Welcome </title>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<?php
include("connection.php");

echo  "SELECT '$username' from users";

$sql = " SELECT * from users";
echo $sql;
?>

<h1>Hello</h1>



</body>

</html>

