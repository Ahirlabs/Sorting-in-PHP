<?php
/*
void insertionSort(int array[], int size) {
  for (int step = 1; step < size; step++) {
    int key = array[step];
    int j = step - 1;

    // Compare key with each element on the left of it until an element smaller than
    // it is found.
    // For descending order, change key<array[j] to key>array[j].
    while (key < array[j] && j >= 0) {
      array[j + 1] = array[j];
      --j;
    }
    array[j + 1] = key;
  }
}
//Display
function display_num($number,$key){
   $len = count($number); 
   $message = "<div>";
   $flag_1 = true;  
   for($i=0;$i<$len;$i++){
       $message .= ($number[$i]==$key)? "<strong>$number[$i]</strong>" : $number[$i];  
      $message .= ($len==$i+1)? ".":",";
   }
   $message .= " Key => $key </div>";
   return $message;
}
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
//Insertion Sort
function insertionSort($array) {
  $size = count($array);   
  $msg = "<div>";
  for ($step = 1; $step < $size; $step++) {
    $key = $array[$step];
    $j = $step-1;
    


    // Compare key with each element on the left of it until an element smaller than
    // it is found.
    // For descending order, change key<array[j] to key>array[j].
    $temp_a = $key;
    $temp_b = 0;
    $msg .= display_num($array,$key);
     
    while ($j >= 0 && $key < $array[$j]) {
      $array[$j + 1] = $array[$j];
      --$j;
    }
    $array[$j + 1] = $key;    
  }
  $msg .= "</div>";
  $array_msg = array('display' => $msg,'array' => $array); 
  return $array_msg;
}
$array = [20,3,22,4,5,11,43,42,24,54];
echo display_array($array);
$display_array = insertionSort($array);
echo $display_array['display'];
echo display_array($display_array["array"]);
*/
//------------------------------------------------------------------------------------






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







