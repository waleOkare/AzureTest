<?php
include ("connection.php");

echo "<br>";


$Movies_SQL = "SELECT marvelMovieID, title
               FROM marvelmovies

";

$Movies_SQL_Query = mysqli_query($db, $Movies_SQL);


echo "<table border = '1'>";

echo "<tr>";

echo "<th> # </th>";
echo "<th> marvelMovieID </th>";
echo "<th> Title </th>";

echo "</tr>";

$indx = 1;
while($row = mysqli_fetch_array($Movies_SQL_Query, MYSQLI_ASSOC)) {

    $marvelMovieID = $row['marvelMovieID'];
    $title = $row['title'];

    echo "<tr>";
    echo "<td> $indx  </td>";
    echo "<td> $marvelMovieID  </td>";
    echo "<td> $title </td>";


    echo "</tr>";

    $indx++;
}

echo "</table>";