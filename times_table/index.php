<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
if (isset($_POST['Submit1'])) {
$start_num = $_POST['start_num'];
$end_num = $_POST['end_num'] +1;
$target_num = $_POST['target_num'];

for($start_num; $start_num < $end_num; $start_num++){
	$answer = $start_num * $target_num;
	print($start_num . " multiplied by " . $target_num . " = " . $answer ."<br>");
}
}

?>
</head>

<body>
<FORM NAME = frmOne Method = "POST" Action ="index.php">
<input type="number" name="start_num" value="1" min="1" max="99999">
<input type="number" name="end_num" value="1" min="1" max="99999">
<input type="number" name="target_num" value="1" min="1" max="99999">
<input type="submit" name="Submit1">
</FORM>
</body>
</html>