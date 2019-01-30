<?php 
$username="admin";
$password="12345";
// and operater
if ($username=='admin' && $password =='1245') {
   echo "welcome";
}
else
{
	echo 'please check your username and password .<br/>';
}
// OR operater
if ($username=='admin' || $password =='1235') {
   echo "welcome";
}
else
{
	echo 'please check your username and password';
}
// NOT operater
if ($username=='admin' || $password !='1235') {
   echo "welcome";
}
else
{
	echo 'please check your username and password';
}


 ?>