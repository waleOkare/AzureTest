<?php
/**
 * Created by PhpStorm.
 * User: Mike Crabb
 * Date: 27/10/15
 * Time: 16:34
 * The previous effort to only have specs, mugs, and sausage rolls available on certain days failed. There were too many days where nothing was on offer to the good people of Aberdeen! It has been decided that a random good will be offered each day but that there is only a limited stock (7 items) of each item available. Once one good runs out, all supply for the rest of the month is cut. Create a page that will print out something similar to the following:
 * On the 1st of the month specs are available
 * On the 2nd of the month mugs are available
 * …
 * On the 17th of the month sausage rolls are available
 * No more goods are available this month
 * On the 4th of the month specs and sausage rolls are available
 *
 * Hint:
 * $todaysGood = rand(0,2);
 */

//Set the stock levels
$spec_stock = 7;
$mug_stock = 7;
$sausageroll_stock = 7;
//Set the first date of the month
$monthDate = 1;
while(($spec_stock > 0) && ($mug_stock > 0) && ($sausageroll_stock > 0)) {
    $todaysGood = rand(0,2);
    //specs = 0
    //mugs = 1
    //sausagerolls = 2

    switch ($todaysGood) {
        case 0:
            $spec_stock--;
            echo "On day " . $monthDate . " Specs are available<br>";
            break;
        case 1:
            $mug_stock--;
            echo "On day " . $monthDate . " Mugs are available<br>";
            break;
        case 2:
            $sausageroll_stock--;
            echo "On day " . $monthDate . " Sausage Rolls are available<br>";
            break;
    }
    $monthDate++; //puts the month forward by one day
}
echo "No more goods are available this month";

//This code should work. I haven't tested it but it looks right. Mike.
?>
