<?php 
$a=20;
$b=25;
$age=10;

if ($a == $b) {
	echo "Test1 : a is equal to b <br/>";
}
else{
	echo "Test1 : a is not equal to b <br/>";
}

if ($a>$b) {
	echo "Test1 : a is greater than  b <br/>";
}
else{
	echo "Test1 : a is not greater then b <br/>";
}

if ($a<$b) {
	echo "Test1 : a is less than  b <br/>";
}
else{
	echo "Test1 : a is not less then b <br/>";
}

if ($a!=$b) {
	echo "Test1 : a is not equal to b <br/>";
}
else{
	echo "Test1 : a is  equal to b <br/>";
}
if ($a>=$b) {
	echo "Test1 : a is either greater than or equal to b <br/>";
}
else{
	echo "Test1 : a is neither greater than or equal to b <br/>";
}
if ($age>=18) {
	echo "you can vote <br/>";
}
else{
	echo "you can't vote <br/>";
}
if ($a === $b) {
	echo "Test1 : a is equal to b <br/>";
}
 else{
 	echo"hello<br/>";
 }
 if ($a<=$b) {
	echo "Test1 : a is either less than or equal to b <br/>";
}
else{
	echo "Test1 : a is neither less than or equal to b <br/>";
}
$c=10;
$d="10";
if ($c===$d) {                                  //=== also check the datatype then return value 
	echo "Test1 : a is equal to b <br/>";
}
else{
	echo "Test1 : a is not equal  to b <br/>";
}

 ?>