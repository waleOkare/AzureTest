<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

    <?php
    // section 3

  //  echo "Hello Worrld! <br>";

    echo"Hello," . " " . "world" . "! <br>";
   // echo 5 * 7;

 //   $myname = "Wale Patrick";
 //   $myage = 30;
  //  echo "My name is " . " "  . $myname . "  " . "and I am " . $myage . " Years old ";

    $name = "wale";

    if($name == "wale"){
        print "I know you! <br>";
    }
    else {
        print "Who are you <br>";
    }


    $age = 18;
    if($age >= 16) {
        print "specs";
    }
    elseif ($age>=18) {
        print "mugs";
    }
        elseif ($age >= 21)
        {
          print "sausage rolls ";
    }
    else
          print " you are not of age";


    ?>
</p>
</body>
</html>
