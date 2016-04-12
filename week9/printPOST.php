<?php



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

