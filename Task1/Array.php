<?php
$colors = array('white', 'green', 'red');

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- 2.	** Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin  -->

<?php
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens",
 "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

   echo asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- 3.	**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

Write a PHP script to display the first element of the above array. 
Expected Output:  white -->
<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo $color[4];
// echo reset($color);
echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- 4.	**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange -->

<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $key=>$value)
echo "$key = $value <br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- 8.	**  Required ** Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4. -->

<?php
$words =  array("abcd","abc","de","hjjj","g","wer");
$shortest=strlen($words[0]);
$longest=strlen($words[0]);
for ($i=0; $i < count($words) ; $i++) { 
    if(strlen($words[$i])<$shortest){
        $shortest=strlen($words[$i]);
    }
    elseif (strlen($words[$i])>$longest) {
        $longest=strlen($words[$i]);
    }
}
echo "The shortest array length is $shortest. The longest array length is $longest";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<!-- 5.	**  Optional ** Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures. 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 

<?php
$Tempreture = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate the average temperature
$sum = 0;
for ($i = 0; $i < count($Tempreture); $i++) {
    $sum += $Tempreture[$i];
}
$average = $sum / count($Tempreture);
echo "The Average is $average <br>";

// Sort the temperatures in ascending order
asort($Tempreture);
echo "List of seven lowest temperatures: ";
for ($i = 0; $i < 7; $i++) {
    echo "$Tempreture[$i]<br>";
}

// Sort the temperatures in descending order
arsort($Tempreture);
echo "List of seven highest temperatures:";
for ($i = 0; $i < 7; $i++) {
    echo "$Tempreture[$i]<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>
// 9.	**  Optional ** Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12

<?php
$array1 = array();
while (count($array1) <= 10) {
    $randomNumber = rand(1, 10); 
    if (!in_array($randomNumber, $array1)) {
        $array1[] = $randomNumber;
    }
}

echo "Generated unique random numbers within the range (1, 10):<br>";
foreach ($array1 as $number) {
    echo "$number <br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
?>

6.	**  Optional ** Write a PHP program to merge the following two arrays. 

Sample Input: 



<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$array3 = $array1 + $array2;
print_r($array3);
?>






