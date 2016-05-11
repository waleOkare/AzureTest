<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Blog Entry </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href=../css/unsemantic-grid-responsive-tablet.css>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

<body>

<main class="grid-container">

    <header class="grid-100">


        <h1> myBlog </h1>
        <h4> because the internet needs to know what i think </h4>

        <nav>
            <ul>
                <li><a href="blog.php"> All Blog Items </a></li>
                <li><a href="blog.php?category=Work"> Work   </a></li>
                <li><a href="blog.php?category=University">  University  </a></li>
                <li><a href="blog.php?category=Family"> Family  </a></li>
                <li><a href="add.php"> Insert a Blog Item </a></li>

            </ul>
        </nav>

        <?
        $category = $_GET['category'];

        if(isset($_GET['category'])){

            $category = $_GET['category'];

            echo "<h4 align='center'>  LOGS FROM THE <Strong style='color: chartreuse'>  $category </Strong> CATEGORY </h4>";


        }else{

            echo '<h4 align="center"> ALL DATA ENTRY FROM  MY BLOG <SPAN style="color: chartreuse"> - LOGS </SPAN>  </h4>';
        }

        ?>


    </header>




    <?php
    include("connection.php");

     ?>

    <section class="grid-66 mobile-grid-66">

        <?php



        if(isset($_GET['category'])){

            $category = $_GET['category'];

          $blogview_SQLselect = "  SELECT *
                                   FROM blogview
                                   WHERE category = '$category' ";

           }else {


            $blogview_SQLselect = "  SELECT * FROM blogview ";

        }

            $blogview_SQLselect_Query = mysqli_query($db, $blogview_SQLselect);

            $indx = 1;
            while ($row = mysqli_fetch_array($blogview_SQLselect_Query, MYSQLI_ASSOC)) {
                $entryTitle = $row['entryTitle'];
                $entrySummary = $row['entrySummary'];
                $category = $row['category'];
                $submitter = $row['submitter'];


                echo "

<main class='grid-container'>


    <section class='grid-10' id='listcon2'>
        Title:
        <br>
    </section>
    <section class='grid-90' id='listcon3'>
    <br>
        {$entryTitle} by {$submitter}


    </section>
    <section class='grid-10' id='listcon4'>
        Category:
        <br>
    </section>
    <section class='grid-90' id='listcon5'>
    <br>
        {$category}

    </section>
    <section class='grid-10' id='listcon6'>
        Summary:
        <br>
    </section>

    <section class='grid-90' id='listcon7'>
    <br>
        {$entrySummary}

    </section>
    <section class='grid-100' id='listcon8'>

    </section>
    ";




        $indx++;
            }





            mysqli_free_result($blogview_SQLselect_Query);
             $db->close()

?>






    </section>



</main>




<footer id="footer">
    <p>Designed by Wale Patrick  2016 (c) </p>
</footer>

</body>
</html>