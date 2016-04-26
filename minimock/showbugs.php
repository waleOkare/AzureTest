<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Bugs Page</title>
    <link rel="stylesheet" type="text/css" href="partone/style.css">
    <link rel="stylesheet" href=partone/unsemantic-grid-responsive-tablet.css>

</head>
<body>
<main class="grid-container">

    <header class="grid-100">
        <img src="partone/logo.png" id="logo"/>

        <h1> <strong> BugTracker </strong></h1>

        <h3> Keeping track of all the pesky little bugs </h3>
    </header>



    <aside class="grid-33 mobile-grid-66">
        <nav>
            <ul>

                <li><a href="showbugs.php"> All Bug Items </a></li>
                <li><a href="showbugs.php"> Android Bugs </a></li>
                <li><a href="showbugs.php"> iOS Bugs </a></li>
                <li><a href="addbugs.php"> Windows Bugs </a></li>
                <li><a href="addbugs.php"> Insert Bug </a></li>
            </ul>
        </nav>
    </aside>

    <?php
    include ("dbConnect.php");
    ?>

    <section class="grid-66 mobile-grid-66">
        <?php
        $BugCategory = $_GET['BugCategory'];
        $bugs_SQLselect = "SELECT *
                           FROM bugs
                           WHERE BugCategory = '$BugCategory'
                           ";

        $bugs_SQLselect_Query = mysqli_query($db, $bugs_SQLselect);

        $indx = 1;
        while($row = mysqli_fetch_array($bugs_SQLselect_Query, MYSQLI_ASSOC)){
            $bugName = $row['bugName'];
            $BugCategory = $row['BugCategory'];
            $BugSummary =  $row['BugSummary'];



                  echo ' <h4><strong>Bug Name </strong> </h4>' .  $bugName. '<br>';
                  echo '<h4><strong> Bug Category </strong> </h4>' . $BugCategory.  '<br>';
                  echo '<h4><strong>Bug Summary </h4></strong>' .  $BugSummary. '<br>';



                 echo ' <hr>';




            $indx++;
        }
        mysqli_free_result($bugs_SQLselect_Query);
        ?>





    </section>



</main>




<footer class="footer">
    <p> Designed by [Wale Patrick, 2016] </p>
</footer>

</body>
</html>