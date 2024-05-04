<?php 

// used to hold variable to print the value .
$var_test="hello this is the testing variable value";
echo $var_test; 

// this is used to concatenate the two string

$var_test_two="this is the second variable value for testing the concatenation";
echo "<br/>";
echo "<br/>";
echo $var_test ."-" . $var_test_two;
echo "<br/>"; 


$age=23;
if ($age<18) {
	
   echo "sorry! you can not give the vote in upcoming election";
}else{
   
   echo "yes! you can give the vote in upcoming election";

}
// shorthand for the if else statment
$age = 25;  

echo ($age > 20) ? "Yes, you are awesome" : "You are not awesome";


$a=3;
$b=1;
$b+=$a;

echo $b;

// understanding about the array in php

$array_class=array('student_name'=>'Devansh','student_age'=>27,'student_phone'=>array(8765945870,900580280,7007804183));


echo '<pre>';
print_r($array_class);

echo '</pre>';


print_r($array_class['student_name'] ."<br/>");
print_r($array_class['student_age'] ."<br/>" );
print_r($array_class['student_phone'][2] ."<br/>" );


// array + loop concept
$array_dish = array(

  "chola bhature" => 300,
  "idli sambhar"   => 400,
  "pudi sabji" => 20,
  "rice rjma" => 50,
);

foreach ($array_dish as $key => $value) {
	 echo "The Price of the Dish ".$key." in whole india is ".$value."<br/>";
}


?>

