<?php

 echo "Write a program that takes two numbers and displays their:<br><br>";

$num1 = 2;
$num2 = 3;

echo "Sum:".($num1+$num2)."<br>";
echo "Difference:".($num1-$num2)."<br>";
echo "Product:".($num1*$num2)."<br>";
echo "Division:".($num1/$num2)."<br>";
echo "Modulus:".($num1%$num2)."<br>";


echo "<br><br>Initialize a variable and apply the following operators step by step:<br><br>";

$value = 5;
echo "Initial value: $value<br>";

$value += 5;
echo "+= 5 : $value<br>";

$value -= 3;
echo "-= 3 : $value<br>";

$value *= 2;
echo "*= 2 : $value<br>";

$value /= 4;
echo "/= 4 : $value<br>";

$value %= 3;
echo "%= 3 : $value<br>";

$number = 50;

echo "<br><br> Write a program that checks whether a number is between 1 and 100 and even using logical operators (&&, ||, !).<br><br>";
echo "Number:$number<br>";

if ($number >= 1 && $number <= 100 && $number % 2 == 0) {
    echo "The number is between 1 and 100 and even.";
} else {
    echo "The number is not between 1 and 100 or not even.";
}
?>