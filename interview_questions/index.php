<?php 
//question 1
// The output will be:
// "yabadabadoo" does not contain "yaba"
// Why? How can this code be fixed to work correctly?

echo "Question 1";
echo "<br>";
echo"broken code";
echo "<br>";
//broken code
$str1 = 'yabadabadoo';
$str2 = 'yaba';
//strpos finds the position of string 2 inside of string 1, since the starting position is 0 php thinks it is responding false
if (strpos($str1,$str2) !== false) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
echo "<br>";
echo "fixed code";
echo "<br>";
//fixed code with a not idendical operator which means the function only fails when it delivers a response of false
$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2) !== false) {

    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}


echo "<br>";
echo "<br>";
echo "Question 2";
echo "<br>";

// question 2
$x = 5;
//echos 5
echo $x;
echo "<br />";
// x reports 5, then incriments, then reports 6, then adds 5 and 6 giving 11 while x is still 6. then it adds one
echo $x+++$x++;
echo "<br />";
//x reports the value of x which is currently 7
echo $x;
echo "<br />";
//x reports 7 then subtracts 1, then reports x again at 6. 7 - 6 is 1 so 1 is echoed. x's value is 6 when it is decrimented once more
echo $x---$x--;
echo "<br />";
//x reports 5
echo $x;

echo "<br>";
echo "<br>";
echo "Question 3";
echo "<br>";
//What will be the values of $a and $b after the code below is executed? Explain your answer.
$a = '1';
//$b is set equal to a reference of $a meaning that anything that affects one of them affects both of them.
$b = &$a;
//$b is set equal to a string of 21 (2 concactinated with $b's value which is 1)
$b = "2$b";
echo $a;
echo "<br>";
echo $b;

echo "<br>";
echo "<br>";
echo "Question 3";
echo "<br>";
//What will be the output of each of the statements below and why?
//leading 0 in a number tells the php to use octal. result false
var_dump(0123 == 123);
echo "<br>";
//when wrapped in a string the leading 0 is ignored. result true
var_dump('0123' == 123);
echo "<br>";
// '===' compares both type and value. result false
var_dump('0123' === 123);
echo "<br>";
?>