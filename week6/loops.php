<?php




/**
 * Created by PhpStorm.
 * User: Mike Crabb
 * Date: 27/10/15
 * Time: 16:34
 * After unsuccessfully trying to substitute mugs for hugs Aberdeen has decided to only allow specific items to be made available on specific days of the month. From now on:
 *  •	Specs are available on days that are a multiple of 2,
 *  •	Mugs are available on days that are a multiple of 3,
 *  •	Sausage Rolls are available on days that are a multiple of 4.
 *  Create a web page that will print out the following for a 30 day month:
 *  On the 1st of the month no products are available
 *  On the 2nd of the month specs are available
 *  On the 3rd of the month mugs are available
 *  On the 4th of the month specs and sausage rolls are available
 */


for ($i = 1; $i < 30; $i++)
{
    $y = 0; //I'm using this as a marker to tell that at least one thing is being made
    echo "<p>On day " . $i . " the following products are available: ";

    if ($i % 2 == 0)
    {
        echo "Specs ";
        $y = 1;
    }
    if ($i % 3 == 0)
    {
        echo "Mugs ";
        $y = 1;
    }
    if ($i % 4 == 0)
    {
        echo "Sausage Rolls";
        $y = 1;
    }
    if ($y != 1) //if one thing isn't being made on this day then it displays that nothing is available that day.
    {
        echo "NONE";
    }
    echo "</p>";
}
?>

