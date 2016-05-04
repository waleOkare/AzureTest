<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bug Page</title>
    <link rel="stylesheet" type="text/css" href="../resources/style.css">
    <link rel="stylesheet" href=../resources/unsemantic-grid-responsive-tablet.css>

</head>

<body>
<main class="grid-container">

    <header class="grid-100">
        <img src="../resources/logo.png" id="logo">

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

                    <ul class="form-style-1">

                        <li>
                            <label>Bug Name

                                <input type="text" name="Title" class="field-long"  required />
                                <br>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label>Bug Summary

                                <textarea name="Content" id="field5" class="field-long field-textarea" rows="2" cols="40" required></textarea>

                            </label>
                        </li>

                        <li>
                            <label>Bug Category
                                <select name="Option" class="field-select" required>
                                    <option value=" " selected disabled>Select </option>
                                    <option value="Cat">Android</option>
                                    <option value="dog">ios</option>
                                    <option value="misc">Windows</option>
                                </select>
                            </label>
                        </li>



                        <li>
                            <input type="submit" value="Submit" />
                        </li>
                    </ul>
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