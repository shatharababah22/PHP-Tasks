
<!-- 1.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. **  Required **

Expected Output:  total as a number  -->
<?php
echo "**************1**************** <br> <br> <br>";

for($i=0; $i<30 ;$i++){
$Firstinteger=0;
$Firstinteger+=$i;

}
echo "Total as a number of integers $Firstinteger";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php

echo "**************2**************** <br> <br> <br> <br>";
$array1 = array(
    array('A', 'A', 'A', 'A', 'A'),
    array('A', 'A', 'A', 2, 'B'),
    array('A', 'A', 'C', 'C', 'C'),
    array('A', 'D', 'D', 'D', 'D'),
    array('E', 'E', 'E', 'E', 'E')
);

for ($row = 0; $row < count($array1); $row++) { 
    for ($col = 0; $col < 5; $col++) { 
        echo $array1[$row][$col] ."\n";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!-- 3.	Create a script to generate the following pattern, using the nested for loop. . **  Optional **

Expected Output:

1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5 -->

<?php

echo "**************3**************** <br> <br> <br> <br>";
$array1 = array(
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 2, 2),
    array(1, 1, 3, 3, 3),
    array(1, 4, 4, 4, 4),
    array(5, 5, 5, 5, 5)
);

for ($row = 0; $row < count($array1); $row++) { 
    for ($col = 0; $col < 5; $col++) { 
        echo $array1[$row][$col] ."\n";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- 4.	Create a script to generate the following pattern, using the nested for loop. **  Required **

Expected Output:

1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5 -->

<?php
echo "**************4**************** <br> <br> <br> <br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
    if ($i === $j) {
            echo "$i ";
    } else {
    echo "0 ";
    }
}
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>


<!--  5. Write a program to calculate and print the factorial of a number using a for loop.
The factorial of a number is the product of all integers up to and including that number.
** Required **


Sample Input: 5
Expected Output: 120  -->


<?php
echo "**************5**************** <br> <br> <br> <br>";

$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of $number is: $factorial";

echo "<br>";
echo "<br>";
echo "<br>";
?>


<!-- 6.	Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a
 number is the sum of previous two numbers.
  Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … **Required**. -->


<?php
echo "**************Fibonacci sequence****************<br> <br> <br> <br>";
$array = [0, 1]; // Initialize the array with the first two Fibonacci numbers (0 and 1).
for ($i = 2; $i < 100; $i++) {
    $nextNumber = $array[$i - 1] + $array[$i - 2]; // Calculate the next Fibonacci number.
    array_push($array, $nextNumber); // Add the next Fibonacci number to the array.
}

print_r($array); // Display the entire Fibonacci sequence.
echo "<br><br><br>";
?>







<!-- 9.	Write a PHP program to generate and display the first n lines of a Floyd triangle **Required**


Sample output:
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15 -->
<?php
echo "Sample Output:<br><br>";

$n = 5; // Change this value to generate a different number of rows

$num = 1; // Start with the number 1

for ($row = 1; $row <= $n; $row++) {
    // Print the elements for the current row
    for ($col = 1; $col <= $row; $col++) {
        echo $num . " ";
        $num++; // Increment the number for the next element
    }

    echo "<br>";
}
?>
