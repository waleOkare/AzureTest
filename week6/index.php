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

// if and else Statements....
    $age = 9;
    if($age >= 21) {
        print "specs";
    }
    elseif($age>=18) {
        print "mugs";
    }
        elseif($age >= 16)
        {
          print "sausage rolls ";
    }
    else
          print " you are not of age";

 $numberofCars = 3;

    switch($numberofCars=3){
        case 1:
            echo "has 1 car";
            break;
        case 2:
            echo "has 2 cars";
            break;
        case 3:
            echo "has 3 cars";
            break;
        default:
            echo " does not have a car";


    }




    ?>
</p>
</body>
</html>
