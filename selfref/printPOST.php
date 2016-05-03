




<?php

$Title = $_GET['Title'];
$option = $_GET['Option'];

$Content = $_GET['Content'];



echo '<article>';

                      echo'<h1>' . $Title . '</h1>';
echo '<br>';
                     echo '<strong>'.$option .'</strong>';
echo '<br>';

                 echo '<p>'.$Content .'</p>';

echo'</article>';


echo $Title;