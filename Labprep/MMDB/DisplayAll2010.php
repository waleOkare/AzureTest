<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">

</head>

<body>

<main class="grid-container">


    <header class="grid-100">
        <h3> MARVEL MOVIES DATABASE QUERYING </h3>

    </header>


    <aside class="grid-33 mobile-grid-66">
        <nav>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="DisplayAllMovies.php"> All MOVIES CURRENTLY IN THE DATABASE </a></li>
                <li><a href="DisplayMoviesMarvelStudio.php"> ALL MARVEL CREATED BY MARVEL STUDIOS </a></li>
                <li><a href="DisplayAll2010.php"> MOVIES FROM 2010 </a></li>
                <li><a href="DisplayAllXmenFilms.php"> ALL XMEN FILMS </a></li>

            </ul>
        </nav>
    </aside>


<?php
include("connection.php");


$sql = "
              SELECT *
              FROM marvelmovies
              WHERE yearReleased>2010;

";
echo "<table border = '1'>";

echo "<tr>";



echo "<th> yearReleased </th>";
echo "<th> Title </th>";


echo "</tr>";



$result = mysqli_query($db,$sql);
while($row = $result->fetch_array()){

    $yearReleased = $row['yearReleased'];
    $title = $row['title'];

    echo "<tr>";

    echo "<td> $yearReleased </td>";
    echo "<td> $title </td>";


    echo "</tr>";
}


?>




<footer id="footer">
    <p> Designed by Wale Patrick </p>
</footer>

</body>
</html>