//print sum of digits

<?php
function sumof($number){

    $sum = 0;
    // Use the function parameter $number instead of a fixed number
    for ($i = 0; $i < strlen($number); $i++) { 
        // Calculate the remainder correctly
        $rem = $number % 10;
        // Add the remainder to the sum
        $sum += $rem;
        // Remove the last digit from $number
        $number = (int)($number / 10);
    }
    
    return $sum;
}

$number = 234;
echo "The sum of the digits is: " . sumof($number);


?>