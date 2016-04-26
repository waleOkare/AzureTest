<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bug Page</title>
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
                <li><a href="showbugs.php?BugCategory=Android"> Android Bugs </a></li>
                <li><a href="showbugs.php"> iOS Bugs </a></li>
                <li><a href="showbugs.php"> Windows Bugs </a></li>
                <li><a href="addbugs.php"> Insert Bug </a></li>
            </ul>
        </nav>
    </aside>




    <section class="grid-66 mobile-grid-66">
        <?php
        include ("dbConnect.php");
        if($_SERVER['REQUEST_METHOD']==='GET'){
            ?>

            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method ="post">

            <label>Bug Name</label><input type="text" name="bugName" required>
            <br>
            <br>
                <label> Bug Category </label>
                <select name="BugCategory" required>

                    <option value="Android ">Android</option>
                    <option value="iOS">iOS</option>
                    <option value="Windows">Windows</option>
                </select>
                <br>
                <br>

            <label> Bug Summary </label> <textarea rows="8" cols="50" name="BugSummary" required> </textarea>
            <br>

            <input type="submit" value="Submit">

        </form>
            <?php



        }elseif($_SERVER['REQUEST_METHOD']==='POST') {


            $bugName = $_POST['bugName'];
            $BugCategory = $_POST['BugCategory'];
            $BugSummary = $_POST['BugSummary'];


            $bug_SQLinsert = "INSERT INTO bugs (bugName,BugCategory,BugSummary)
                              VALUES ('$bugName', '$BugCategory', '$BugSummary');";


            if (mysqli_query($db, $bug_SQLinsert)) {

                header("location:showbugs.php");
            } else {
                echo "Failed to add new bug";

            }
        }
       else{
           ("location:index.php");
       }




?>


    </section>



</main>




<footer class="footer">
    <p> Designed by Wale Patrick 2016(c) </p>
</footer>

</body>
</html>