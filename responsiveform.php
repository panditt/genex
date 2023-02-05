<?php

include 'connect.php';
?>

<DOCTYPE! HTML>
<html>
<head>
<script src="js/resp.js"></script>
<style>
body{
	background-color: grey;
}
#fed{
	background-color: white;
	Width: 40%;
	Height: 100%;
	text-align:center;
	min-width: 500px;
}
input[type=text]{
	width:42%;
	padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit]{
	width:85%;
	padding: 12px 20px;
  margin: 8px 0;
  background-color:orange;
  color: white;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email],input[type=password], select{
	
	width:85%;
	padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}
#frid{
	width: 100%;
	padding: 12px 35px;
	text-align: left;
	font-size: 105%;
	}
#fred{
	width: 100%;
	padding: 12px 35px;
	}
</style>

</head>
<body>
<div >
<table align="center" id="fed">
<tr><th colspan="2"><h1>Responsive Registration Form</h1></th></tr>
<tr>
<form method="post" action="savedata.php" name="reg" onsubmit="return vali()">
<td colspan="2" align="center">
<input type="email" name="email" placeholder="Enter Email" align="center" required>
</td>
</tr>
<tr><td colspan="2" align="center">
<input type="password" placeholder="Type Password" name="fpas" required id="fpas">
</td></tr>
<tr>
<td colspan="2" align="center">
<input type="password" placeholder="Re-Type Password" name="cpas" required  id="cpas">
<small>
</small>
</td>
</tr>
<tr>
<td align="center">
<input type="text" placeholder="First Name" name="fname">
<input type="text" placeholder="Last Name" name="lname" required>
</td>
</tr>
<tr>
<td align="left">
<table id="fred">
<tr>
<td>
<input type="radio" name="gender"><label for="gender">Male</label>
</td>
<td align="left">
<input type="radio" name="gender"><label for="gender">Female</label>
</td>
</tr>
</table>
</td></tr>

<tr><td>
<?php
include 'countryselection.php';
?>
</td></tr>


<tr><td id="frid"><input type="checkbox" required ><label>I agree with terms and conditions</label></td></tr>
<tr><td id="frid"><input type="checkbox" required><label>I want to receive the newsletter</label></td></tr>
<tr><td></td></tr>

<tr><td align="center">

<input type="submit" value = "Register" >
</td></tr>

</form>






</tr>
</table>
</div>
<script src="resp.js"></script>
</body>
</html>