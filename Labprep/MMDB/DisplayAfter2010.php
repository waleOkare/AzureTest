<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Home  </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href=unsemantic-grid-responsive-tablet.css>

</head>

<body>

<main class="grid-container">

    <header class="grid-100">


        <h1> MARVEL MOVIES DATABASE </h1>


    </header>


    <aside class="grid-33 mobile-grid-66">

        <nav>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="DisplayAllMovies.php"> All MOVIES  </a></li>
                <li><a href="DisplayMoviesMarvelStudio.php">  MOVIES BY MARVEL STUDIOS </a></li>
                <li><a href="DisplayAfter2010.php"> MOVIES FROM 2010 </a></li>
                <li><a href="DisplayAllXmenFilms.php"> ALL XMEN FILMS </a></li>

            </ul>
        </nav>

    </aside>




    <section class="grid-66 mobile-grid-66">



        <?php
        include("connection.php");


        $sql = "
              SELECT *
              FROM marvelmovies
              WHERE yearReleased>2010;";


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


    </section>



</main>




<footer id="footer">
    <p> Designed by [Wale Patrick, [2016] </p>
</footer>

</body>
</html>