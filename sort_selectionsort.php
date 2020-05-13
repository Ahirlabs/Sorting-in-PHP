<?php
/*
//Selection Sort
#include<iostream.h>
#include<conio.h>
// Display For Array
void display(int number[],int size){
   for(int i=0;i<size;i++){
      cout<<" "<<number[i];
      (size==i+1)? cout<<".": cout<<",";
   }
}
//Selection Sort
void selection_sort(int array[],int size){
   for(int i=0;i<size;i++){
      for(int j=i+1;j<size;j++){
         if(array[i]>array[j]){
            int temp = array[i];
            array[i] = array[j];
            array[j] = temp;
         }
      }
   }
}

void main(){
   clrscr();
   int size = 8;
   int array[10];
   array[0] = 34;
   array[1] = 304;
   array[2] = 302;
   array[3] = 745;
   array[4] = 91;
   array[5] = 5;
   array[6] = 764;
   array[7] = 200;
   cout<<"\n Before Sorting \n";
   display(array,size);
   cout<<"\n After Sorting \n";
   //Sort
   selection_sort(array,size);
   display(array,size);
   getch();
}
*/

function display($array){
   $size = count($array);
   $message = "";
   for($i=0;$i<$size;$i++){
      $message .= $array[$i];
      $message .= ($size==$i+1)? ".": ",";
   }
   return $message;
}
function display_num($array,$temp_a,$temp_b){
   $size = count($array);
   $message = "<p>";
   for($i=0;$i<$size;$i++){
      $message .= ($array[$i]==$temp_a || $array[$i]==$temp_b)?"<strong>$array[$i]</strong>":$array[$i];
      $message .= ($size==$i+1)? ".": ",";
   }
   $message .="</p>";
   return $message;
}

function selection_sort($array){
   $size = count($array);
   $message = "";
   for($i=0;$i<$size;$i++){
      for($j=$i+1;$j<$size;$j++){
         if($array[$i]>$array[$j]){
            $temp_a = $array[$i];
            $temp_b = $array[$j];
            $message .= display_num($array,$temp_a,$temp_b);
            $array[$j] = $temp_a;
            $array[$i] = $temp_b;
         }
      }
   }
   return array('display' => $message,'array' =>$array);
}
$array = [34,304, 302,745,91,5,764,200];
echo "<p>".display($array)."</p>";
$sort_array = selection_sort($array);
echo "<div> ".$sort_array['display']."</div> ";
echo "<p>".display($sort_array['array'])."</p>";

