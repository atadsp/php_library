<?php
//it uses whatever operator you place between the letters
$today = date('d-m-y');
print $today;

//captilize the year to give it in long format
$today = date('Y/m/d');
print '<br>' . $today . '<br>';

//the W gives you the current week of the year
$today = date('W');
$year = date('Y');
print "It's week " . $today . " of " . $year;


//hours:minutes:seconds:am/pm
$time = date('h:i:s a');
print '<br>' . $time;

//G gives you UTC time and T expresses which timezone the date function is using
$time = date('G:i T');
print '<br>' . $time . '<br>';

//get date is a neet function
$today = getdate();
print $today['mday'] . ':Day of the month <br>';
print $today['wday'] . ':Day of the week <br>';
print $today['yday'] . ':Day of the year <br>';

//simple function to calculate days since last post or some such
$post_date = 60;
$today = getdate();

$day_difference = $today['yday'] - $post_date;

Print "Days since last post = " . $day_difference;

?>