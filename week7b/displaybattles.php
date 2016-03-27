<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Superhero System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <h1> The Super-Superhero System </h1>
    <h2> Display all Battles </h2>
    <a href="index.php"> Return to home.... </a>

</header>

<main>
<?
include ("db_connect.php");

if(isset($_GET['id'])) {
    $superheroID = $_GET['id'];
    $sql_query = "SELECT * FROM superherobattles where superheroID = '$superheroID'";
}
else{
    $sql_query = "SELECT * FROM superherobattles";
}

$result = $db->query($sql_query);
while($row = $result ->fetch_array()){

    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $mainSuperpower = $row['mainSuperPower'];
    $villanFought = $row['villanFought'];
    echo "<article>
           <p> The superhero known as <strong>{$firstname} {$lastname}</strong> recently fought <strong> {$villanFought}</strong> using
           <strong> {$mainSuperpower} </strong> </p>";
}
    ?>
</main>
</body>
</html>



