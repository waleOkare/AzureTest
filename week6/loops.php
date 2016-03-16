<?php



$items = array("specs", "mugs", "Sausage rolls");

 // echo $items[0];

 ///for($i = 1; $i <=30; $i++){

  //  echo "ont the " . $i . "of the month no products are avaiiilable ";
for($j = 0; $j <=30; $j+=2) {
    for($k = 0; $k <=30; $k+=3) {

        echo "  On the " . $j . " of the month" . $items[0] . "are available <br> ";
    }
    echo "  On the " . $k . " of the month" .$items[1] . "are available <br> ";

}
?>

