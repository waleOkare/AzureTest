
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>PHP Login Form without Session</h1>

 <h2 style="color: ghostwhite" align="center"> Administrator Login </h2>
 <div class="login-page">
         <div class="form">
                 <form method="post" action="login.php" >
                         <label style="color: gray"> Username </label> <input type="text" name="username" placeholder="username" />
                         <br>
                         <label style="color: gray"> Password </label> <input type="password" name="password" placeholder="password"  />


                         <br>
                         <br>
                         <div class="submit">
                             <button type="submit" name="submit" value="login" style="color: darkorange"> <Strong> LOGIN </Strong> </button>
                                 <br>
                                 <br>
                             </div>
                     </form>
             </div>
     </div>

</body>
</html>
