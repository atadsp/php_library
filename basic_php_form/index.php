<html>
<head>
<title>A BASIC HTML FORM</title>
<?PHP
if (isset($_POST['Submit1'])) {
	$username = $_POST['username'];
	if ($username == "letmein") {
		print ("Welcome back, friend!");
	}
	else {
		print ("You're not a member of this site");
	}
}
else {
	$username ="";
}
?>
</head>
<body>

<FORM NAME ="form1" METHOD ="POST" ACTION = "index.php">

<INPUT TYPE = "Text" VALUE ="<?PHP print $username ; ?>" NAME = "username">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">

</FORM>
<br>

</body>
</html>