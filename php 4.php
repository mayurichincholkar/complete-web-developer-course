<?php
$x = 10;

if ($x < 20) {
  echo "value of x = ".$x;
}else{
  echo "try again !";
}

$age = 18;

if($age < 18){
  echo "age less than 18";
}elseif ($age >= 19 && $age <= 50) {
  echo "age is in between 19 to 50";
}else{
  echo "age greater than 50";
}

?>
