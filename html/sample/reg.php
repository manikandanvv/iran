<!DOCTYPE html>
<html>
<head>
	<title>MY SHOP.com Signup page</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<h1><center>MY SHOP.com</center></h1>
	<div class="herr"  >
		<img src="myshop.png" class="logo">
		<ul class="bti">
			<li><a href="http://localhost/login/log.php">LOGIN</a></li>
			<li><a href="http://localhost/login/reg.php">SIGN UP</a></li>
			<li><a href="">ABOUT</a></li>
		    <li><a href="">FEEDBACK</a></li>
		</ul>
	</div>
	<div class="log" align="center">
	<h2><center>Create Your Account</center></h2><br>
	<form name="frm" action="pro.php" method="POST" class="fm" >
	<table>
		<tr>
			<td>Name:</td>
			<td>
				<input type="text" name="name" id="name" placeholder="Enter your name" required="">
			</td>
		</tr>
		<tr>
			<td>Username:</td>
			<td>
				<input type="text" name="uname" id="uname" placeholder="Enter your username" required="">
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="Password" name="pass" id="pass" placeholder="Enter your Password" required="">
			</td>
		</tr>
		<td>Password agian:</td>
			<td>
				<input type="Password" name="pass2" id="pass2" placeholder="Enter your Password" required="">
			</td>
		</tr>
		<tr>
			<tr>
			<td>Mobile NO</td>
			<td>
				<input type="text" name="mno" id="mno" placeholder="Enter your Mobileno" required="">
			</td>
		</tr>
		<tr>
			<td>City</td>
			<td>
				<input type="text" name="city" id="city" placeholder="Enter your city" required="">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="submit" id="submit">
			</td>
		</tr>
	</table>
    </form>
</div>
</body>
</html>