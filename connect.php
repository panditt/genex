<?php
$serv = "localhost";
$usr = "root";
$pas = "";
$db = "gene_data";

$conn = new mysqli($serv,$usr,$pas,$db);
If($conn->connect_error) 
{
	die("connection failure: ".$conn->connect_error);
}
//include 'getpage.php';
?>