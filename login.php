	
<html>
<head>
<style>
body{
	font-family: Sans-serif;
	background-color: #d14d4d;
}
table{
	
	text-align: center;
	background-color: white;
	width: 35%;
	height: 70%;
	border-radius: 10px;
	min-width:350px;
}
button[type=submit]{
	width:49%;
	padding: 12px 20px;
  margin: 0px 0;
  background-color:black;
  color: white;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button{
	width:49%;
	padding: 12px 20px;
  margin: 0px 0;
  background-color: #dde2eb;
  color: grey;
  display: inline-block;
  border: 0px solid #ccc;
  box-sizing: border-box;
}
input {
  outline: 0;
  border-width: 0 0 2px;
  border-color: #ccc;
  width:85%;
	padding: 12px 20px;
  margin: 8px 0;
  background-color: transparent;
  display: inline-block;
  box-sizing: border-box;
}



a {
	color: grey;
	text-decoration: none;
}

</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<table align="center">
<tr><td><h1>Login</h1></td></tr>
<tr><td>
<form method="post" action="login.php" autocomplete="off" id="loginform">
<input type="email" name="email" placeholder="EMAIL"  required>
</td></tr>
<tr><td>
<input type="password" name="password" placeholder="PASSWORD"  required>
</form>
</td></tr>
<tr><td>
<a href="responsiveform.php">FORGOT YOUR PASSWORD?</a>
</td></tr
<tr><td>
<a href="responsiveform.php"><button>REGISTER</button></a>
<button type="submit" value="LOGIN" form="loginform">LOGIN</button>

</td></tr>
<tr><td></td></tr>
</table>
</body>
</html>