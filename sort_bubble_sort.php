<?php
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

function display_num($number,$temp_a,$temp_b){
   $len = count($number); 
   $message = "<div>";  
   $flag_1 = true;
   for($i=0;$i<$len;$i++){
     
      
      $message .= ($number[$i]==$temp_a || $number[$i]==$temp_b)? "<strong>$number[$i]</strong>" : $number[$i];
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
            echo display_num($number,$temp_A,$temp_B);
            $number[$j] = $temp_A;
            $number[$j-1] = $temp_B;            
         }
      }
   }
   return $number;
}
// Array 
$array = [3, 203, 34, 746, 200, 984, 198, 764, 9];

if(isset($_POST["submit"])){
//   $array = $_POST["array"];
   //print_r($array);
}

echo "<p> Before Sorting </p>";
echo display($array);
echo "<p> After Sorting </p>";
$sort_array = bubbleSort($array);
echo display($sort_array);


?>
<script type="text/javascript">
   function add_row(){
      var num = document.getElementById("num_array").value;
      console.log(num);
      var display_div = document.getElementById("display_array");
      var display="";
      for(var i=1;i<=num;i++){
         display += '<p> '+i+' <input type="number" min="1" max="999" name="array[]" value="1" ></p>';
      }
      display += '<input type="submit" name="submit" value="SORT ARRAY" />'
      display_div.innerHTML = display;
      
   }
</script>

<div>

   <form method="post">
   <div> 
      <p>Array Length : </p>
      <p><input type="number" min="3" max="10" maxlength="2" id="num_array" />  <input type="button" value="ADD" onclick="add_row()"/></p>
   </div>
      <div id="display_array">
         
      </div> 
   </form>
</div>


