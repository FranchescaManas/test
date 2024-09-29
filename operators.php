<?php
// 0 is also equivalent to false
// 1 is also equivalent to true

// note: == will compare values even if its NOT the same data type. But, === will need to compare the same data type for it to also be true.

$num1 = "0"; //string
$num2 = 5; //int
$num3 = 5;

if($num1 !== $num2){ 
    echo "true";
}else{
    echo "false";
}

// Increment
echo "<br> Current value of num2 is $num2";
echo $num2--; // 0 + 1 (++ means to add 1)
echo $num2;

// Note: $num2++ (if ++ is after variable, it will only be shown AFTER it has been displayed)

// Increment
echo "<br> Current value of num3 is $num3";
echo --$num3; // 0 + 1 (++ means to add 1)


// Note: ++$num3 (if ++ is BEFORE the variable, will immidiately add 1 before it displays