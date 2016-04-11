<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="#" type="text/css" />
</head>
<body>
<h1>LOGIN FORM </h1>

    <h3>Login Form</h3>
    <br>
    <br>
    <form method="post" action="checklogin.php" >
        <label>Username:</label>
        <br>
        <input type="text" name="username" placeholder="username" />
        <br>
        <br>
        <label>Password:</label>
        <br>
        <input type="password" name="password" placeholder="password" />
        <br><br>
        <input type="submit" name="submit" value = "submit"/>
    </form>


</body>
</html>