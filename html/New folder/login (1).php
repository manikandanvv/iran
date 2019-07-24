<!DOCTYPE html>
<html>
<head>
	<title>Online Bill Payment</title>
	<style type="text/css">
		body
{
	border: 1px solid green;
	height: 600px;
}
.log
{
	width: 420px;
	height: 240px;
	
	color: black;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-25%);
	box-sizing: border-box;
	border:white;
	padding: 5px 10px;
	text-align: left;
	margin-top: 40px;
	}
	.imge
	{
		width: 100px;
		height: 100px;
		border-radius: 50px;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);
		border:solid black;
	}
	.herr
	{
		margin-top: 125px;
		height: 50px;
		
	}
	.header{
      background-color: blue;
      color: white;
      height: 190px;
      font-family: cursive;
      margin-top: -22px;

	}
	.header h1{
		position: relative;
		color: yellow;
		margin-left: 100px;
		top: 80px;
	}
	.bti
	{
	
    float:right;
    height: 30px;
    list-style: none;
    margin-top:-9px;  
	}
	.bti li
	{
		display: inline-block;
	}
	.bti li a
	{
		color: white;
		text-decoration: none;
		padding: 0px 10px;
		font-family: "Roboto",sans-serif;
		font-size: 25px;
	}
	.bti li a:hover
	{
		border:1px solid white;
	}
.logo
{
	position: relative;
	left: 600px;
	top: 100px;

}
a
{
color: blue;
}
.ph
{
	color: red;
}
	</style>
</head>
<body>
	<div class="header">
		<div class="heading">
			<h1>ONLINE EB BILL PAYMENT SYSTEM</h1>
		</div>
		<div class="herr"  >
		<ul class="bti">
			<li><a href="http://localhost/web/login.php">LOGIN</a></li>
			<li><a href="http://localhost/web/reg.html">SIGN UP</a></li>
			<li><a href="">ABOUT</a></li>
		    <li><a href="">FEEDBACK</a></li>
		</ul>
	</div>
	</div>
	<img src="loginlogo.jpg" class="logo">
<div class="log" align="center">
	<h2 style="margin-left: -100px;"><center>Log in</center></h2><br>
	<form name="frm" action="login.php" method="POST" class="fm" >
	
<label>Name</label><br>
			<input type="text" id="user" name="user" required="Enetr your Username">
		</p>
		<p>
			<label>EB ServiceNO</label><br>
			<input type="number" id="eid" name="eid" maxlength="5" required="">
		</p>
		<div class="ph">
	<?php
	$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"pro");
if (isset($_POST['user']) && isset($_POST['eid'])) {
	
	$username=$_POST['user'];
    $password=$_POST['eid'];
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);


       $result=mysqli_query($con,"select * from pron1 where name='$username' and serno='$password'") or die("failed".mysqli_error());
$row=mysqli_fetch_array($result);
if ($row['name']==$username && $row['serno']== $password) {
	header("location:main.php");
	
}
else{
	echo "Invalid Username and serviceid";
}
}
?>
</div>
		<p>
			<input type="submit" id="submit" name="submit" value="login" style="width: 80px;margin-left: 30px;">
		</p>
</form>
<a href="http://localhost/web/reg.html">New user!</a>
</div>

</div>

</body>
</html>