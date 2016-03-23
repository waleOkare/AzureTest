<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System </title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body bgcolor="#8b0000">

<header>
    <h1> The Super-Superhero System </h1>
    <h2> Superhero Home Page </h2>

</header>
<p> What would you like to do? </p>

    <nav>

        <ul>
          <li><a href="insertsuperhero.php"> INSERT A SUPERHERO </a> </li>
            <li><a href="displaySuperheros.php"> DISPLAY SUPERHEROS </a>  </li>
           <li><a href="battle.php"> INSERT A BATTLE </a> </li>
          <li><a href="displaybattles.php"> DISPLAY ALL BATTLE </a> </li>

            <ul>
                <?include ("db_connect.php");
                $sql_query = "SELECT * FROM superheros";
                $result = $db->query($sql_query);
                while($row = $result->fetch_array()){
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $id = $row['superheroID'];
                    echo "<li> <a href='displaybattles.php?id={$id}'>Battles for {$firstname} {$lastname}</a></li> ";
                }

               ?>
            </ul>

        </ul>
    </nav>










</body>
</html>





