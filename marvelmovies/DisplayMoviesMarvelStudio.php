<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Movies Created by Marvel Studios </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>

<header>
    <nav>

        <ul>
            <li><a href="index.php"> HOME </a> </li>
            <li><a href="DisplayAllMovies.php"> DISPLAY ALL MOVIES </a> </li>
            <li><a href="DisplayMoviesMarvelStudio.php"> DISPLAY ALL MOVIES CREATED BY MARVEL STUDIO </a>  </li>
            <li><a href="DisplayMoviesAfter2010.php">DISPLAY ALL MOVIES CREATED AFTER 2010</a> </li>
            <li><a href="DisplayAllXmenFilms.php">DISPLAY ALL XMEN FILM </a> </li>

        </ul>

    </nav>

</header>


<?php
include ("connection.php");

echo "<br>";


$Movies_SQL = "SELECT marvelMovieID, title, productionStudio
               FROM marvelmovies
               WHERE productionStudio = 'Marvel Studios'
";

$Movies_SQL_Query = mysqli_query($db, $Movies_SQL);

echo'<h2> TABLE DISPLAYS ALL MOVIES CREATED BY MARVEL STUDIO FROM MARVELMOVIES DATABASE </h2>';
echo'<br>';

echo "<table border = '1'>";

echo "<tr>";


echo "<th> marvelMovieID </th>";
echo "<th> Title </th>";
echo "<th> productionStudio </th>";

echo "</tr>";

$indx = 1;
while($row = mysqli_fetch_array($Movies_SQL_Query, MYSQLI_ASSOC)) {

    $marvelMovieID = $row['marvelMovieID'];
    $title = $row['title'];
    $productionStudio = $row['productionStudio'];

    echo "<tr>";

    echo "<td> $marvelMovieID  </td>";
    echo "<td> $title </td>";
    echo "<td> $productionStudio </td>";

    echo "</tr>";

    $indx++;
}

echo "</table>";







echo'
<footer class="footer">
    <p> Designed by Wale Patrick(c) </p>
</footer>
';