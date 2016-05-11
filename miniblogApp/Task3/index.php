<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page  </title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href=../css/unsemantic-grid-responsive-tablet.css>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type="text/css">

</head>

<body>

<main class="grid-container">

    <header class="grid-100">


        <h1>  myBlog  </h1>
        <h4> because the internet needs to know what i think </h4>

        <form>
            Enter search terms: <input type="text" name="search">
        </form>

        <?php
        if (isset($_GET['search']) && ($_GET['search'] !== '')) {
            $search = urlencode($_GET['search']);
            echo <<<EOL
<a href="http://google.com ={$search}">Click here to search for '$search'</a>

EOL;
        }
        ?>

        <nav>
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="blog.php"> All Blog Items </a></li>
                <li><a href="blog.php?category=Work"> Work   </a></li>
                <li><a href="blog.php?category=University">  University  </a></li>
                <li><a href="blog.php?category=Family"> Family  </a></li>
                <li><a href="add.php"> Insert a Blog Item </a></li>

            </ul>
        </nav>




    </header>







    <section class="grid-66 mobile-grid-66">
        <p>
            This is a mini-blog Web Application Where you can keep Logs of what
            you think - Application Holds your record and Can check back to view
            it Anytime.




        </p>
    </section>

    <aside class="grid-33 mobile-grid-66">

        <img src="../resources/assets%20(1)/blog.png" id="logo">






    </aside>

</main>




<footer id="footer">
    <p> Designed by Wale Patrick  2016 (c) </p>
</footer>

</body>
</html>