
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HelloSelector</title>
</head>
<body>

<h4> Where would you like to say hello? </h4>

<a href="helloPrinter.php" > <?php
    $Earth = $_POST["Earth"];
    echo "Earth" ?> </a>
<br>
 <?php echo  "<a href='helloPrinter.php' >   Mars" ?> </a>
<br>
<a href="helloPrinter.php" ><?php echo "Uranus" ?> </a>





</body>
</html>

