<?php

echo'<h1>WELCOME!</h1>';

echo'<br>';

//$username = $_POST['username'];

// echo'The person username is'.$username;


function displayAccessLevelInformation($access_level) {
    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}

