<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display All Movies Created After 2010 </title>
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


                   $Movies_SQL = "SELECT marvelMovieID, yearReleased, title
                                  FROM marvelmovies
                                  WHERE yearReleased > '2010'
";

$Movies_SQL_Query = mysqli_query($db, $Movies_SQL);
echo'<h2> TABLE DISPLAYS ALL MOVIES CREATED <strong style="color: darkred"> AFTER 2010 </strong> FROM  MARVELMOVIES DATABASE </h2>';
echo'<br>';

echo "<table border = '1'>";

    echo "<tr>";


        echo "<th> marvelMovieID </th>";
        echo "<th> yearReleased </th>";
        echo "<th> Title </th>";


        echo "</tr>";

    $indx = 1;
    while($row = mysqli_fetch_array($Movies_SQL_Query, MYSQLI_ASSOC)) {

    $marvelMovieID = $row['marvelMovieID'];
        $yearReleased = $row['yearReleased'];
    $title = $row['title'];


    echo "<tr>";

        echo "<td> $marvelMovieID  </td>";
        echo "<td> $yearReleased </td>";
        echo "<td> $title </td>";


        echo "</tr>";

    $indx++;
    }

    echo "</table>";







echo'
<footer class="footer">
    <p> Designed by Wale Patrick(c) </p>
</footer>
';