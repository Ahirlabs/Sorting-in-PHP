<?php
/*
Sorting Name :  Bubble Sort
Original Algorithm Created by: Iverson in 1962.
Recreated Algoritm Author : Er. Arvind Ahir
Language : PHP
*/
// Display For Array
function display($number){
   $len = count($number); 
   $message = "<div>";  
   for($i=0;$i<$len;$i++){
      $message .= $number[$i];
      $message .= ($len==$i+1)? ".":",";
   }
   $message .= "</div>";
   return $message;
}

// Function of Buuble Sort
function bubbleSort($number){
   $len = count($number);
   for($i = $len - 1; $i >= 0; $i--) {
      for($j = 1; $j <= $i; $j++) {
         if($number[$j-1] > $number[$j]) {
            //Swap
            $temp_A = $number[$j-1];
            $temp_B = $number[$j];
            $number[$j] = $temp_A;
            $number[$j-1] = $temp_B;            
         }
      }
   }
   return $number;
}
// Array 
$array = [3, 203, 34, 746, 200, 984, 198, 764, 9];

echo "<p> Before Sorting </p>";
echo display($array);
echo "<p> After Sorting </p>";
$sort_array = bubbleSort($array);
echo display($sort_array);
?>


