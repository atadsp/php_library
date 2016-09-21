<?php
//here is an example of how to instatiate and array
$exampleArray = array( );

//here is the simple way to assign things in an array
// $seasons = array( "Autumn", "Winter", "Spring", "Summer" );

//we are assinging the values specific key values.
$seasons[]="Autumn";
$seasons[]="Winter";
$seasons[]="Spring";
$seasons[]="Summer";
$x = count($seasons);
// the count function counts the number of array entires. Which we can store in a variable

for($i = 0; $i < $x; $i++){
	print($seasons[$i]);
	print('<br>');
}
print('<br>');
//example for loop using an array for the logic
$start = 1;
$times = 2;
$answer = array();

for ($start; $start < 11; $start++) {
	$answer[$start] = $start * $times;
	echo $answer[$start];
	print('<br>');
}

print('<br>');

$full_name = array( );

$full_name["David"] = "Gilmour";
$full_name["Nick"] = "Mason";
$full_name["Roger"] = "Waters";
$full_name["Richard"] = "Wright";

foreach ($full_name as $key_name => $key_value) {

print "Key = " . $key_name . " Value = " . $key_value . "<BR>";

}

print '<p> Before the sort</p>';

$numbers[ ]="2";
$numbers[ ]="8";
$numbers[ ]="10";
$numbers[ ]="6";
$x = count($numbers);

for ($i = 0; $i < $x; $i++){
	print($numbers[$i] . '<br>');
}

print '<p> After the sort </p>';
sort($numbers);

for ($i = 0; $i < $x; $i++){
	print($numbers[$i] . '<br>');
}
// sort ( ) Sorts an array from low to high based on the values of the entries
// asort ( ) Sorts an array from low to high while maintaining the key relationships
// rsort( ) – Sorts a Scalar array in reverse order
// arsort( ) - Sorts the Values in an Associative array in reverse order
// krsort( ) - Sorts the Keys in an Associative array in reverse order


print '<p> Simple Dice Game </p>';
$numbers = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);
$random_key = array_rand($numbers, 1);
print $random_key;

?>