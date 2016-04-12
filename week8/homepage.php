<?php

echo'<h1>WELCOME!</h1>';

echo'<br>';

session_start();

$access_level_session = $_SESSION['access_level_session'];

displayAccessLevelInformation($access_level_session);

function displayAccessLevelInformation($access_level_session)
{
    if ($access_level_session == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    } elseif ($access_level_session== "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}



/**
$access_level = $_COOKIE['access_level'];

displayAccessLevelInformation($access_level);

function displayAccessLevelInformation($access_level) {
    if ($access_level == "standarduser") {
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
**/
