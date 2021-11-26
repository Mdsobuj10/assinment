<?php


// // asseinment

// // Create a loop where the initial value is 10000. You need to rotate the loop 50 times and use the increment and decrement operator twice.
for ($i=0; $i <= 10000 ; $i++) { 
   if ($i >= 9950 && $i <= 10000) {
      echo "{$i} <hr>";
   }
}

// while

$a =10000;
while ($a >= 9950) {
    echo "{$a} <hr>";

$a--;
}

//Create a loop that rotates 500 times using the for loop where you just pull out the numbers divisible by 3 and 4.
for ($t=1; $t <= 500 ; $t++) { 
      if ($t % 3 == 0) {
        echo "{$t} <hr>";
      }elseif ($t % 4 == 0) {
        echo "{$t} <hr>";
      }
      
}
/* Create a loop using for loop that will increment by 3 per step and the lugup will break the auto loop when it finds a number divisible by 11 (end the loop).*/



for ($y = 1 ; $y <= 10000 ; $y = $y + 3) { 
   if ($y >= 7000 && $y <= 9000) {
        echo " $y <hr> ";
     if ($y % 11 == 0) {
        echo " {$y} The loop is divisible by 11 ";
        break;
     }
   }
}
// The use of for loop is 2,3,4,5
 echo "<br>";
for ($c=1; $c <= 10 ; $c++) { 
   $number2 = $c * 2;

   echo " 2 x $c = {$number2}  <hr>";
}
echo "<br>";
for ($x=1; $x <= 10 ; $x++) { 
    $number3 = $x * 3;
 
    echo " 3 x $x = {$number3}  <hr>";
 }
 echo "<br>";
 for ($a=1; $a <= 10 ; $a++) { 
   $number4 = $a * 4;

   echo " 4 x $a = {$number4}  <hr>";
}
echo "<br>";
for ($l=1; $l <= 10 ; $l++) { 
   $numbe5 = $l * 5;

   echo " 5 x $l = {$numbe5}  <hr>";
}
echo "<br>";

/* Where the loop will be multiplied by 8 per step and the loop will stop whenever it gets a number divisible by 5 */

for ($y = 1; $y <= 100; $y = $y + 6) {
   echo "$y <br>";
   if ($y % 5 == 0) {
         echo "$y is divisible by 5 <br>";
         break;
   }
}
