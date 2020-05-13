<?php
/*
Sorting Name :  Insertion Sort
Original Algorithm Created by: (Name Not Found) 
Recreated Algoritm Author : Er. Arvind Ahir
Language : PHP
*/

//Display Array
function display_array($array){
   $message = "";
   $len = count($array);
   for($i=0;$i<$len;$i++){
      $val = $array[$i];
      $message .= $val;
      $message .= ($i==$len-1)? ".":",";
   }
   return $message;
}
//Insertion Sort
function insertionSort($array) {
   $size = count($array);
   for ($step = 1; $step < $size; $step++) {
      $key = $array[$step];
      $j = $step-1;
      // Compare key with each element on the left of it until an element smaller than
      // it is found.
      // For descending order, change key<array[j] to key>array[j].
      while ($j >= 0 && $key < $array[$j]) {
         $array[$j + 1] = $array[$j];
         --$j;
      }
      $array[$j + 1] = $key;
   }
   return $array;
}
$array = [20,3,22,4,5,11,43,42,24,54];
echo "<p>".display_array($array)."</p>";
$display_array = insertionSort($array);
echo "<p>".display_array($display_array)."</p>";
?>
