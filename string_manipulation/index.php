<html>
<head>
<title>Change Case</title>

<?PHP
	$full_name = ' ';

	if (isset($_POST['Submit1'])) {
	
		$full_name = $_POST['username'];

		//capitalizes every word in a string
		$full_name = ucwords($full_name);

		//trims out white space on either side of a string
		$full_name = trim($full_name);

		// the line below shuffles a string (comment out for easy use of future functions)
		//$full_name = str_shuffle($full_name);
	}
?>

</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION ="index.php">
	<INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $full_name; ?>" >
	<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Login">
</FORM>

<p> <?php echo $full_name ?>

</br> </br>
<p> Browser Identification </p>
<?php
$agent = $_SERVER['HTTP_USER_AGENT'];

print $agent . '<br>';

if ( strpos(strtoupper($agent), 'MSIE') ) {

print "Internet Explorer";

} 
else if (strpos(strtoupper($agent), 'FIREFOX')) {

print "Firefox";

} else if(strpos(strtoupper($agent), 'CHROME')) {
	print 'Google Chrome';

} else {

print $agent;

}
?>

<p> Splitting a string </p>

<?php 
$text_line = "Poll number 1, 1500, 250, 150, 100, 1000";
// explode seperates a string into an array with the chosen seperator
$text_line = explode( "," , $text_line );
$x = count($text_line);

for ($i = 0; $i < $x; $i++){
	print($text_line[$i] . '<br>');
}

print '<p> Now we implode the array </p>';

$text_line = implode(",", $text_line);
print $text_line;

?>
</body>
</html>
