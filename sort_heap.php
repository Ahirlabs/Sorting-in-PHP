<?php


function display($array){
      $size = count((array)$array);   
   
   $message = "";
   for($i=0;$i<$size;$i++){
      $message .= $array[$i];
      $message .= ($size==$i+1)? ".": ",";
   }
   return $message;
}


function swap(&$array,$left,$right){
   $temp = $array[$left];
   $array[$left] = $array[$right];
   $array[$right] = $temp;  
}

function Heapify(&$input,$n,$i){
   $largest = $i;
   $l = $i + 1;
   $r = $i + 2;
   if ($l < $n && $input[$l] > $input[$largest])
      $largest = $l;
   if ($r < $n && $input[$r] > $input[$largest])
      $largest = $r;
   if ($largest != $i){
      $left = $i;
      $right= $largest;
      swap($input,$left,$right);
      Heapify($input, $n, $largest);
   }
}

function SortHeap($array){
   $size = count((array)$array);
   for ($i = $size - 1; $i >= 0; $i--){
      Heapify($array, $size, $i);
   }
   for ($j = $size - 1; $j >= 0; $j--){
      $left = 0;
      $right= $j;
 
      swap($array,$left,$right);      
      Heapify($array, $j, 0);
   }
   return $array;
}



$array = [34,304,302,745,91,5,764,200,12,11];
echo "<p>".display($array)."</p>";
$sort_array = SortHeap($array);
echo "<p>".display($sort_array)."</p>";
?>