<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>self Reference form </title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']==='GET'){
?>

<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method ="post">

    <label>Title</label> <input type="text" placeholder="Title" name="Title">
    <br>
    <label>Content</label><br>
    <textarea rows="2" cols="30" name="Content"> </textarea>
    <br>
    <label>Category</label>

    <select name="Option">
        <option value="Cat">Cat</option>
        <option value="dog">dog</option>
        <option value="misc">Misc</option>
    </select>

    <br>
    <br>
    <br>
    <input type="submit" value="Submit">

    <?


    }elseif($_SERVER['REQUEST_METHOD']==='post'){


        $Title = $_POST['Title'];
        $Content = $_POST['Content'];
        $option = $_POST['Option'];




        print  $Title;
        echo '<br>';
        print $Content ;
        echo '<br>';
        print $option ;


}

?>




</body>
</html>












