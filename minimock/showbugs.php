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


        <?
        if(isset($_GET['BugCategory'])){
            $BugCategory =$_GET['BugCategory'];
            $bugs_SQLselect = "    SELECT *FROM bugs WHERE BugCategory = '$BugCategory' ";
            $bugs_SQLselect_Query = mysqli_query($db, $bugs_SQLselect);
            $row = mysqli_fetch_array($bugs_SQLselect_Query, MYSQLI_ASSOC);
            $BugCategory = $row['BugCategory'];
              echo ' <h3> Keeping track of all the pesky little bugs </h3>'. '<br>'  ;
              echo "<p> You are in the .'$BugCategory'. </p>";
        }else{
            echo '<h3> Keeping track of all the pesky little bugs </h3>' . '<br>';
            echo '<p> You are looking at all the data in the database</p>';
        }

        ?>


    </header>



    <aside class="grid-33 mobile-grid-66">
        <nav>
            <ul>

                <li><a href="showbugs.php"> All Bug Items </a></li>
                <li><a href="showbugs.php?BugCategory=Android"> Android Bugs </a></li>
                <li><a href="showbugs.php"> iOS Bugs </a></li>
                <li><a href="showbugs.php"> Windows Bugs </a></li>
                <li><a href="addbugs.php"> Insert Bug </a></li>
            </ul>
        </nav>
    </aside>

    <?php
    include ("dbConnect.php");

    ?>

    <section class="grid-66 mobile-grid-66">
        <?php
    //$BugCategory = $_GET['BugCategory'];

if($_GET['BugCategory']) {

    $bugs_SQLselect = "    SELECT *
                           FROM bugs
                           WHERE BugCategory = '$BugCategory'
                           ";
}else{
    $bugs_SQLselect = "    SELECT *
                           FROM bugs
                           ";

}
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