<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bug Page</title>
    <link rel="stylesheet" type="text/css" href="../Task1/style.css">
    <link rel="stylesheet" href=../Task1/unsemantic-grid-responsive-tablet.css>

</head>

<body>
<main class="grid-container">

    <header class="grid-100">
        <img src="../Task1/logo.png" id="logo"/>

        <h1> <strong> BugTracker </strong></h1>

        <h3> Keeping track of all the pesky little bugs </h3>
    </header>

    <aside class="grid-33 mobile-grid-66">
        <nav>
            <ul>

                <li><a href="showbugs.php"> All Bug Items </a></li>
                <li><a href="showbugs.php?BugCategory=Android"> Android Bugs </a></li>
                <li><a href="showbugs.php?BugCategory=iOS"> iOS Bugs </a></li>
                <li><a href="showbugs.php?BugCategory=Windows"> Windows Bugs </a></li>
                <li><a href="addbugs.php"> Insert Bug </a></li>
            </ul>
        </nav>
    </aside>




    <section class="grid-66 mobile-grid-66">
        <?php
        include("dbConnect.php");
        if($_SERVER['REQUEST_METHOD']==='GET'){
            ?>

            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method ="post">

            <label>Bug Name <input id="bugname" type="text" name="bugName" required></label>
            <br>
            <br>
                <label> Bug Category
                <select name="BugCategory" required>
                    <option value=" " selected disabled>Select </option>
                    <option value="Android ">Android</option>
                    <option value="iOS">iOS</option>
                    <option value="Windows">Windows</option>
                </select>
                </label>
                <br>
                <br>

            <label> Bug Summary  <textarea rows="8" cols="50" name="BugSummary" required> </textarea> </label>
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

                header("location:showbugs.phplab");
            } else {
                echo "Failed to add new bug";

            }
        }
       else{
           ("location:index.phplab");
       }




?>


    </section>



</main>




<footer class="footer">
    <p> Designed by Wale Patrick 2016(c) </p>
</footer>

</body>
</html>