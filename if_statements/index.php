<?php

//basic if statements see javascript
$kitten_image = 1;
$church_image = 0;

if ($kitten_image == 1) {
//the print line was the hardest part...
print ("<IMG SRC =../images/kitten.jpg>");

} 
echo "<br>";
if ($church_image == 1) {
print ("<IMG SRC =../images/church.jpg>");
}

echo "<br>";
//if else statments 
$kitten_image = 0;
$church_image = 1;

if ($kitten_image == 1) {

print ("<IMG SRC =../images/kitten.jpg>");

}
else {

print ("<IMG SRC =../images/church.jpg>");

}

echo "<br>";
//if else if (Fancy)
$kitten_image = 1;
$church_image = 0;

if ($kitten_image == 1) {

print ("<IMG SRC =../images/kitten.jpg>");

}
else if ($church_image == 1) {

print ("<IMG SRC =../images/church.jpg>");

}
else {

print ("No value of 1 detected");

}

?>