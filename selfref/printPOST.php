




<?php

$Title = $_POST['Title'];
$option = $_POST['Option'];

$Content = $_POST['Content'];



echo '<article>';

                      echo'<h1>' . $Title . '</h1>';
echo '<br>';
                     echo '<strong>'.$option .'</strong>';
echo '<br>';

                 echo '<p>'.$Content .'</p>';

echo'</article>';


