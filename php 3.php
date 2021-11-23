<?php
$myArray = array("red", "green", "blue");

print_r($myArray);
echo count($myArray);

$myArray[] = "white";
print_r($myArray);

unset($myArray[1]);
print_r($myArray);

?>
