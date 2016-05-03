




<?php

$Title = $_GET['Title'];
$Content = $_GET['Content'];
$option = $_GET['Option'];


echo '<article>';

echo'<h1>' . $Title . '</h1>';
echo '<br>';
echo '<p>'.$Content .'</p>';
echo '<br>';
echo '<strong>'.$option .'</strong>';


echo'</article>';

