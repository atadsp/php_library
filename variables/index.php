<?php 

//Basic Variables
$x = 55;
$y = 983242;
// use operations (+, -, /, *) when adding numbers.
$z = $x + $y;
// regular concatination just add the first number ontop of the second (IE $aa becomes 55983242)
$aa = $x . $y;

//works the same way as in js. just REMEBER YOUR SEMICOLON
$stuff = 'What would YOU do?';
$things = 'For a Klondike Bar?';
//this is one way to concatinate strings
$stuff_things = "{$stuff} {$things}";
//this is the other better way
$things_stuff = $stuff . " " . $things;

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<!-- all inbody php must be written with <?php ?> -->
<p> <?php echo $aa ?></p>
<p> <?php echo $z ?> </p>
<p> <?php echo $stuff_things; ?> </p>
<!-- Print is another way to push things to the DOM -->
<?php print("iohwojgoiwejgoiwejgiweo 3883893985897357893859"); ?>
</body>
</html>
