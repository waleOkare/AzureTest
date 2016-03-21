
<head>
<meta charset="utf-8">
    <title> Welcome </title>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>


<?php
include("login.php");

$username = $_GET["username"];
echo $username;

echo "<p> current logged in user is:  </p> " . $username;
?>



<h1>Hello</h1>



</body>

</html>

