<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sendPOST</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']==='GET'){

echo '
    <form action="printPOST.php" method="post">
    <label>Title</label>  <input type="text" placeholder="Title" name="Title">
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

</form>';


}elseif($_SERVER['REQUEST_METHOD']==='post'){


        $Title = $_POST['Title'];
        $Content = $_POST['Content'];
        $option = $_POST['Option'];


        echo '<article>';

        echo'<h1>' . $Title . '</h1>';
        echo '<br>';
        echo '<p>'.$Content .'</p>';
        echo '<br>';
        echo '<strong>'.$option .'</strong>';


        echo'</article>';



}

?>




</body>
</html>












