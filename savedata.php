<?php
include 'connect.php';
$a =$_POST["email"];
$b =$_POST["fname"];
$c =$_POST["lname"];
$d =$_POST["fpas"];
$e =$_POST["gender"];
$f =$_POST["country"];
$da = date("j F Y");

$sa = "INSERT INTO `login`(`fname`, `lname`, `NID`, `username`, `password`, `date`, `regid`, `submission`) 
VALUES ('$b','$c','$f','$a','$d','$da','','1')"; 
$se = "SELECT username FROM `login` WHERE username='$a'";
$ent = $conn->query($se);
if($ent->num_rows>0)
{
	 echo '<script type ="text/JavaScript">';  
	echo 'alert("This user is already registered")';
	echo '</script>';
	include'responsiveform.php';
}
else
{
	 echo '<script type ="text/JavaScript">';  
	echo 'alert("User registered successfully.")';
	echo '</script>';
$sav = $conn->query($sa);

}





?>