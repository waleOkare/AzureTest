<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bug Page</title>
    <link rel="stylesheet" type="text/css" href="../resources/style.css">
    <link rel="stylesheet" href=../resources/unsemantic-grid-responsive-tablet.css>
    <style type="text/css">
        .form-style-1 {
            margin:10px auto;
            max-width: 400px;
            padding: 20px 12px 10px 20px;
            font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }
        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }
        .form-style-1 label{
            margin:0 0 3px 0;
            padding:0px;
            display:block;
            font-weight: bold;
        }
        .form-style-1 input[type=text],
        .form-style-1 input[type=date],
        .form-style-1 input[type=datetime],
        .form-style-1 input[type=number],
        .form-style-1 input[type=search],
        .form-style-1 input[type=time],
        .form-style-1 input[type=url],
        .form-style-1 input[type=email],
        textarea,
        select{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border:1px solid #BEBEBE;
            padding: 7px;
            margin:0px;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            outline: none;
        }
        .form-style-1 input[type=text]:focus,
        .form-style-1 input[type=date]:focus,
        .form-style-1 input[type=datetime]:focus,
        .form-style-1 input[type=number]:focus,
        .form-style-1 input[type=search]:focus,
        .form-style-1 input[type=time]:focus,
        .form-style-1 input[type=url]:focus,
        .form-style-1 input[type=email]:focus,
        .form-style-1 textarea:focus,
        .form-style-1 select:focus{
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }
        .form-style-1 .field-divided{
            width: 49%;
        }

        .form-style-1 .field-long{
            width: 100%;
        }
        .form-style-1 .field-select{
            width: 100%;
        }
        .form-style-1 .field-textarea{
            height: 100px;
        }
        .form-style-1 input[type=submit], .form-style-1 input[type=button]{
            background: #4B99AD;
            padding: 8px 15px 8px 15px;
            border: none;
            color: #fff;
        }
        .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
            background: #4691A4;
            box-shadow:none;
            -moz-box-shadow:none;
            -webkit-box-shadow:none;
        }
        .form-style-1 .required{
            color:red;
        }
    </style>
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

                                <input type="text" name="bugName" class="field-long"  required />
                                <br>
                                <br>
                            </label>
                        </li>

                        <li>
                            <label>Bug Summary

                                <textarea name="BugSummary" id="field5" class="field-long field-textarea" rows="2" cols="40" required></textarea>

                            </label>
                        </li>

                        <li>
                            <label>Bug Category
                                <select name="BugCategory" class="field-select" required>
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