<?php

$year = 2048;
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "The year $year is a leap year.\n";
    } else {
        echo "The year $year is not a leap year.\n";
    }


// Sample Input


// Sample Output

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>




<!-- 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’ -->


<?php
$temprature=27;

if ($temprature <20){
    echo 'The season in winter';
}
else
echo 'The season is summer' ;
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


?>

<!-- 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
Sample Output: ‘It is summertime!’ -->

<?php
$x=10;
$y=10;
if($x=$y)
echo ($x+$y)*3;
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>

<!-- 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’ -->

<?php
$firstInteger=10;
$secondInteger=10;
if($firstInteger+$secondInteger==30){
    echo $firstInteger+$secondInteger;
}
else
echo "False";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>

<!-- 5.	Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’ -->

<?php
$firstInteger=30;
if($firstInteger %3==0)
echo $firstInteger;
else {
    echo "False";   
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


?>

<!-- 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’ -->

<?php
$firstInteger=10;
if(20 <$firstInteger && $firstInteger< 50){
echo $firstInteger;
}
else{
echo "False";
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>

<!-- 7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9 -->

<?php
function LargestNumber($X, $Y, $Z) {
    $largest = $X;

    if ($Y > $largest) {
        $largest = $Y;
    }

    if ($Z > $largest) {
        $largest = $Z;
    }

    return $largest;
}

$largestNumber = LargestNumber(10, 20, 50);
echo "The largest number is: " . $largestNumber;

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>

<!-- 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit -->






<?php
$x=100;
if($x<=50){
echo ($x*2.5);
}
elseif($x<=150){
    echo ((50)*2.5)+(($x-50)*5);
}
elseif($x<=250){
    echo ((50)*2.5)+(100*5)+(($x-150)*6.20);
}
else 
echo (((50)*2.5)+(100*5)+((250)*6.20)+($x-250)*7.50);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>


<!-- 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’ -->.


<?php
$firstInteger=30;
if($firstInteger >18)
echo $firstInteger;
else {
    echo "This is no eligible to vote";   
}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


?>

<!-- 10.	Write php script  to check whether a number is positive, negative or zero

Sample Input: -60
Sample Output: ‘Negative’ -->

<?php
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

// Test the function with the sample input -60
$sampleInput = -60;
$result = checkNumber($sampleInput);
echo "The number is: " . $result;
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>

<!-- 11.	Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division -->

<?php

$num1=40;
$num2=20;
        switch ('add') {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero!";
                }
                break;
            default:
                $result = "Invalid operator";
                break;
        }

        echo "Result: " . $result;
        echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
    
    ?>

<!-- 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’ -->
<?php


$array = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
function Average($grades) {
    $total = 0;
    for ($i = 0; $i < count($grades); $i++) {
        $total += $grades[$i];
    }
    $result = $total / count($grades);
    return $result;
}

$result = Average($array);

if ($result < 60) {
    echo "F";
} elseif ($result < 70) {
    echo "D";
} elseif ($result < 80) {
    echo "C";
} elseif ($result < 90) {
    echo "B";
} else {
    echo "A";
}
?>






