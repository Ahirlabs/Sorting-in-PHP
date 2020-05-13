<?php
/*
Sorting Name : Selection Sort
Original Algorithm Created by: (Name Not Found)
Recreated Algoritm Author : Er. Arvind Ahir
Language : PHP
*/
// Display Function
function display($array){
   $size = count($array);
   $message = "";
   for($i=0;$i<$size;$i++){
      $message .= $array[$i];
      $message .= ($size==$i+1)? ".": ",";
   }
   return $message;
}
// Selection Sort
function selection_sort($array){
   $size = count($array);
   for($i=0;$i<$size;$i++){
      for($j=$i+1;$j<$size;$j++){
         if($array[$i]>$array[$j]){
            $temp_a = $array[$i];
            $temp_b = $array[$j];
            //Swap 
            $array[$j] = $temp_a;
            $array[$i] = $temp_b;
         }
      }
   }
   return $array;
}
$array = [34,304, 302,745,91,5,764,200];
echo "<p>".display($array)."</p>";
$sort_array = selection_sort($array);
echo "<p>".display($sort_array)."</p>";
?>
