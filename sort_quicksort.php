<?php
/*
 * Quicksort - pivot is the first element, descending order
 * @param array array to be sorted
 * @param left index of the first element which we can touch
 * @param right index of the first element which we can't touch
void quicksort(int array[], int left, int right) {
    if(left < right) { 
        int boundary = left;
        for (int i = left + 1; i < right; i++) { 
            if (array[i] > array[left]) { 
                swap(array, i, ++boundary);
            }
        }
        swap(array, left, boundary);
        quicksort(array, left, boundary);
        quicksort(array, boundary + 1, right);
    }     
}
/**
 * Swaps the elements of the array
 * @param array array
 * @param left index of the first element
 * @param right index of the second element
void swap(int array[], int left, int right) {
    int tmp = array[right]; 
    array[right] = array[left];
    array[left] = tmp;         
}
*/
/*
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
//Display Array
function display_array($array){
   $len  = count($array);
   for($i=0;$i<$len;$i++){
      $val = $array[$i];
      echo $val;
      echo ($i==$len-1)? ".":",";
   }
}

$array  = [1,8,6,10,7,2,3,9,5]; 
$left = 0; 
$right = count($array); 
display_array($array);
echo "<br>";
quicksort($array,$left,$right);
display_array($array);

***************************/


function swap(&$array,$left,$right) {
    $tmp = $array[$right]; 
    $array[$right] = $array[$left];
    $array[$left] = $tmp;         
}
//Quick Sort Function
function quicksort(&$array,$left,$right) {
    if(isset($message)){
      $message .= "";    
    }else{
       $message = "";   
    }   
       
    if($left < $right) { 
        $boundary = $left;
        for ($i = $left + 1; $i < $right; $i++) {
            if ($array[$i] < $array[$left]) {
                $var1 = $array[$left];   
                $var2 = $array[$i];
                
                $message .= "<p><strong> $var1 , $var2 ( Swap ) => $var2 , $var1</strong></p>";
                swap($array, $i, ++$boundary);
            }
            //$message .= ($i == $right-1)? ".":",";
        }
        swap($array,$left,$boundary);
        $message .= quicksort($array, $left, $boundary);
        $message .= quicksort($array, $boundary + 1, $right);
    }
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
}

$array  = [1,8,6,10,7,2,3,9,5]; 
$left = 0; 
$right = count($array); 
echo display_array($array);
$message = quicksort($array,$left,$right);
echo $message;
echo display_array($array);
