<html>
<head>
<title>Check For Blank Text Boxes</title>
</head>
<body>

<?php 
$first ="";
$second = "";

function display_error_message($user_text) {
	if ($user_text == "") {
		print "One or more blank text boxes detected";
	} 
	else {
		print "Text boxes OK";
	}
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$first = trim($_POST['first']);
		$second = trim($_POST['second']);
		display_error_message($first);
		display_error_message($second);
	}
?>


<FORM Method = "POST" action ="index.php">

First Name: <INPUT TYPE = "text" name = "first" value ="<?=$first?>">
Surnmae: <INPUT TYPE = "text" name = "second" value ="<?=$second?>">

<input type="submit" name="Submit" value="Submit">
</FORM>

<br> <br>


<?PHP

$total_spent = 101;
$order_total = calculate_total($total_spent);
print $order_total;

function calculate_total($total_spent) {
	$discount = 0.1;
	if ($total_spent > 100) {
		$discount_total = $total_spent - ($total_spent * $discount);
		$total_charged = $discount_total;
	}
	else {
		$total_charged = $total_spent;
	}
		return $total_charged;
	}

print '<br><br>';

// $referrer = $_SERVER['HTTP_REFERER'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['REMOTE_ADDR'];

// print "Referrer = " . $referrer . "<BR>";
print "Browser = " . $browser . "<BR>";
print "IP Adress = " . $ipAddress;
print '<br><br>';

foreach($_SERVER as $key_name => $key_value) {
	print $key_name . " = " . $key_value . "<br>";
}

print '<br><br>';

include "linksPage.txt"

?>
</body>
</html>