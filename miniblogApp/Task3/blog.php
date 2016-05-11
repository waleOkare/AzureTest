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


        <h1> <a href="index.php">  myBlog </a> </h1>
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
              include("connection.php");


        if(isset($_GET['category'])) {

            $category = $_GET['category'];

            $sql = "  SELECT * FROM blogview WHERE category = '$category'";



           }else {


            $sql = "  SELECT * FROM blogview ";

        }


                $result = $db->query($sql);
            while ($row = $result->fetch_array()) {
                $entryTitle = $row['entryTitle'];
                $entrySummary = $row['entrySummary'];
                $category = $row['category'];
                $submitter = $row['submitter'];


                echo "

<main class='grid-container'>


    <section class='grid-10' id='listcon2'>
        Title:
        <br>
         <br>

    </section>
    <section class='grid-90' id='listcon3'>

        {$entryTitle} by {$submitter}


    </section>
    <section class='grid-10' id='listcon4'>
        Category:
        <br>
        <br>

    </section>
    <section class='grid-90' id='listcon5'>

        {$category}

    </section>
    <section class='grid-10' id='listcon6'>
        Summary:
        <br>
         <br>

    </section>

    <section class='grid-90' id='listcon7'>

        {$entrySummary}

    </section>
    <section class='grid-100' id='listcon8'>

    </section>
    ";



            }


             $db->close()

?>






    </section>



</main>




<footer id="footer">
    <p>Designed by Wale Patrick 2016 (c) </p>
</footer>

</body>
</html>