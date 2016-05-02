<!--- This is the connection file to the Sql database.

<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'ba0905be48d675');
define('DB_PASSWORD', '73cda819');
define('DB_DATABASE', 'waleokaredb');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db) {
    echo 'Successful Connection to the database';
} else {
    echo 'Failed to connect to the database';
}

?>

DB TABLES...
<!--
CREATE TABLE bugs (
bugID int(11) NOT NULL AUTO_INCREMENT,
bugName varchar(50) NOT NULL,
BugSummary varchar(50) NOT NULL,
BugCategory varchar(50) NOT NULL,
PRIMARY KEY (bugID)
);

-->



<!--- INSERTING VALUES INTO THE DATABASE.-->
<?php
include( "your connection file.php");

$yourdbvariablename = "INSERT INTO tablename (Column1, Column2, Column3,Column4)
                         VALUES (' values ', ' values', 'values ', 'values ')";

if (mysqli_query($yourdbconnection, $yourdbvariablename)){

    echo "SUccessful insert into the database";
} else {
    echo "Failed to insert  ";
}
?>

<!-- >>>>>>>>>>>>>>>>>>>>> querying the database and displaying it without tables-->

<?php
include( "your connection file.php");
$tperson_SQLselect = "SELECT ID,Salutation, FirstName,    LastName, CompanyID
                     FROM tperson";

$tperson_SQLselect_Query = mysqli_query($db, $tperson_SQLselect);

$indx = 1;
while($row = mysqli_fetch_array($tperson_SQLselect_Query, MYSQLI_ASSOC)){

    $Salutation = $row['Salutation'];
    $FirstName =  $row['FirstName'];
    $LastName = $row['LastName'];
    $CompanyID = $row['CompanyID'];

    echo $indx . " ". $Salutation ." " . $FirstName . " " . $LastName .
        "[Company " .$CompanyID ."] <br/>";
$indx++;
}
mysqli_free_result($tperson_SQLselect_Query);
?>

<!-- >>>>>>>>>>>>>>querying database and populating it in a table.

<?php
include( "your connection file.php");

$tperson_SQLselect = "SELECT ID,Salutation, FirstName, LastName,CompanyID
                      FROM tperson";

$tperson_SQLselect_Query = mysqli_query($dbConnected, $tperson_SQLselect);

echo "<table border = '1'>";

echo "<tr>";

echo "<th> # </th>";
echo "<th> Salutation </th>";
echo "<th> FirstName </th>";
echo "<th> LastName </th>";
echo "<th> Company </th>";

echo "</tr>";

$indx = 1;
while($row = mysqli_fetch_array($tperson_SQLselect_Query, MYSQLI_ASSOC)) {

    $Salutation = $row['Salutation'];
    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];
    $CompanyID = $row['CompanyID'];

    echo "<tr>";
    echo "<td> $indx  </td>";
    echo "<td> $Salutation </td>";
    echo "<td> $FirstName </td>";
    echo "<td> $LastName </td>";
    echo "<td> $CompanyID </td>";

    echo "</tr>";

    $indx++;
}
echo "</table>";

mysqli_free_result($tperson_SQLselect_Query);
?>
<!-- GET -->

<h2> This HyperLink Requests a script ...</h2>

<ul>
    <a href='printGET.php?query=Arsenal&type=spurs'> Arsenal </a>

</ul>

<!-- GET OUTPUT
<?php

$_GET["query"];
$_GET["type"];

print $_GET["query"]  ;

echo '<br>';

print $_GET["type"];

?>

<!-- PUTTING ALL THE INFORMATION TOGETHER- ABLE TO SEND INFORMATION FROM FORMS, SEND IT TO THE DATABASE AND DISPLAY IT IN A TABLE.
<?php
// Form for postCompany

echo '<form name="postCompany" method="post" action="CompanySave.php">';

echo '
  <label> Company Initials </label><input type="text" name="CompanyInitials" />
 <br>
 <br>
<label> Comapany Name </label><input type="text" name="Name" />
 <br>
 <br>
<label> Reg Type </label><input type="text" name="RegType" />
 <br>
 <br>
 <td> Address </td>
 <br>
 <br>
<label> StreetA </label><input type="text" name="StreetA" />
 <br>
 <br>
 <label> StreetB </label><input type="text" name="StreetB" />
 <br>
 <br>
 <label> StreetC </label><input type="text" name="StreetC" />
 <br>
 <br>
 <label> Town </label><input type="text" name="Town" />
 <br>
 <br>
 <label> County </label><input type="text" name="County" />
 <br>
 <br>
 <label> Postcode </label><input type="text" name="Postcode" />
 <br>
 <br>

 <label> Country </label><input type="text" name="COUNTRY" />
 <br>
 <br>

<input type="submit" value="Save"/>


';
echo '</form>';
?>
<?php

/// This is the output, that sends the information to the database, then display it in a table.

    $preName = $_POST['preName'];
    $Name = $_POST['Name'];
    $RegType = $_POST['RegType'];
    $StreetA = $_POST['StreetA'];
    $StreetB = $_POST['StreetB'];
    $StreetC = $_POST['StreetC'];
    $Town = $_POST['Town'];
    $County = $_POST['County'];
    $Postcode = $_POST['Postcode'];
    $COUNTRY = $_POST['COUNTRY'];

//Optional, unless u want to set requirements to the table
 //if(empty($Name)) {
  //  echo 'Cannot add company with no name';
 ///}else {

    $tcompany_SQLinsert = "INSERT INTO tcompany (preName,Name, RegType,StreetA, StreetB, StreetC,Town, County, Postcode, COUNTRY)

     VALUES ('$preName', '$Name', '$RegType', '$StreetA', '$StreetB', '$StreetC','$Town', '$County', '$Postcode', '$COUNTRY');";
// if you don’t want to display it in a table use -> to send // you to ur index page header ("location:index.php");

    echo "<table border = '1'>";

    echo "<tr>";

    echo "<th> preName </th>";
    echo "<th> Name </th>";
    echo "<th>RegType </th>";
    echo "<th>StreetA </th>";
    echo "<th>StreetB </th>";
    echo "<th>StreetC </th>";
    echo "<th>Town </th>";
    echo "<th>County </th>";
    echo "<th>Postcode </th>";
    echo "<th>COUNTRY </th>";

    echo "</tr>";

    echo "<tr>";
    echo "<td>  $preName </td>";
    echo "<td>  $Name </td>";
    echo "<td>  $RegType </td>";
    echo "<td>  $StreetA </td>";
    echo "<td>  $StreetB </td>";
    echo "<td>  $StreetC </td>";
    echo "<td>  $Town </td>";
    echo "<td>  $County </td>";
    echo "<td>  $Postcode </td>";
    echo "<td>  $COUNTRY </td>";

    echo "</tr>";

echo "</table>";

    if (mysqli_query($dbConnected, $tcompany_SQLinsert)) {
    } else {
        echo "Failed to add new company";


   // header("location:index.php");
}
?>

<!-- Okay,…Login in page comes in this order…..index.php, login.php, session.php, logout.php
index.php
include connection file………..
<form method="post" action="login.php" >
        <label>Username </label> <input type="text" name="username" placeholder="username" />

        <br>
        <br>
        <label>Password </label> <input type="password" name="password" placeholder="password" />

        <br>
        <br>

        <div class="submit">
        <input type="submit" name="submit" value = "login" />
            <br>
            <br>
           <a href="UserEnter.php"> <p style="color: mintcream"> Create New Account </p> </a>;
</div>
      </form>
    </fieldset>

    <div class="error"><?php //echo $error;?><?php //echo $username; echo   $password;?>


    </div>
</div>


login.php, // Login page checks the requirements and if everything is okay opens up home.php
<?php
include( connection file)
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username = mysqli_real_escape_string($dbConnected,$_POST['username']);
    $password = mysqli_real_escape_string($dbConnected,$_POST['password']);

    $sql = "SELECT uid
            FROM users
            WHERE username = '$username'
            and
            password = '$password'";

    $result = mysqli_query($dbConnected,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $username and $password, table row must be 1 row

    if($count == 1) {
//error check here...........
        $_SESSION['login_user'] = $username;
echo $_SESSION['login_user'];
        header("location: Home.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}

if(empty($_POST["username"]) || empty($_POST["password"])) {

    echo "Both fields are required. ";
}

// login.php without session........this was the one from the lab

/**
if(empty($_POST["username"]) || empty($_POST["password"])){

    echo "Both fields are required. ";

}else{

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = " SELECT uid
         FROM  users
         WHERE username ='$username'
         and  password ='$password'";

    $result = mysqli_query($dbConnected, $sql);

    if(mysqli_num_rows($result) == 1) {
        header("location: Home.php"); // Redirecting To another Page
    }else{
        echo "Incorrect username or password.";
    }


}

**/

// session.php file..................

include connection file…..
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($dbConnected," select username
                                       from users
                                       where username = '$user_check'
                                       ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}

?>


logout.php..................
//logout link on the home.php points at this link
<?php
session_start();

if(session_destroy()) {
header("Location: index.php");
}

?>






