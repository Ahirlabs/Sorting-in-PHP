<?php
/*
Sorting Name :  Quick Sort
Original Algorithm Created by: Tony Hoare in 1959 and published in 1961.
Recreated Algoritm Author : Er. Arvind Ahir
Language : PHP
*/
//Display Array
function display_array($array){
   $message = "<p>";
   $len  = count($array);
   for($i=0;$i<$len;$i++){
      $val = $array[$i];
      $message .= $val;
      $message .= ($i==$len-1)? ".":",";
   }
   $message .="</p>";
   return $message;
}
//Swap Function
function swap(&$array,$left,$right) {
    $tmp = $array[$right]; 
    $array[$right] = $array[$left];
    $array[$left] = $tmp;         
}
//Quick Sort Function
function quicksort(&$array,$left,$right) {
    if($left < $right) { 
        $boundary = $left;
        for ($i = $left + 1; $i < $right; $i++) {
            if ($array[$i] < $array[$left]) {
                swap($array, $i, ++$boundary);
            }
            
        }
        swap($array,$left,$boundary);
        quicksort($array, $left, $boundary);
        quicksort($array, $boundary + 1, $right);
    }
}

$array = [1, 8, 6, 10, 7, 2, 3, 9, 5]; 
$left = 0; 
$right = count($array); 

echo "<p>".display_array($array)."</p>";
quicksort($array,$left,$right);
echo "<p>".display_array($array)."</p>";
?>
