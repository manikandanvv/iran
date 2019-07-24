<!DOCTYPE html>
<html>
<head>
	<title>Online Bill Payment</title>
	<style type="text/css">
		body
{
	background-image: url(img1.pg);
	background-size: 1400px 700px;
	color: blue;
}
.log
{
	width: 320px;
	height: 420px;
	background-color: red;
	background:rgba(0,0,0,0.5);
	color: white;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-25%);
	box-sizing: border-box;
	border:white;
	padding: 50px 30px;
	text-align: left;
	margin-top: 230px;
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
		margin-top: 50px;
		height: 50px;
		
	}
	.header{
      background-color: blue;
      color: white;
      height: 250px;
      font-family: cursive;

	}
	.header h1{
		position: relative;
		color: yellow;
		margin-left: 300px;
		top: 50px;
	}
	.bti
	{
		background-color: black;
    float:right;
    height: 30px;
    list-style: none;
    margin-top:-50px;  
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
	width: 300px;
	height: 100px;
	border-radius: 30px;
}
a
{
color: white;
}
.ph
{
	color: red;
}
	</style>>
</head>
<body>
	<script type="text/javascript">
		
		window.location.hash="no-back-button";
		window.location.hash="Again-No-back-button";
		window.onhashchange=function(){
			window.location.hash="no-back-button";
		}

	</script>


		<!--<p>
			<label>User Name:</label>
			<input type="text" id="user" name="user">
		</p>
		<p>
			<label>password:</label>
			<input type="password" id="pass" name="pass">
		</p>
		<p>
			<input type="submit" id="submit" name="submit">
		</p>
	</form>-->
	<div class="header">
		<div class="heading">
			<h1>ONLINE EB BILL PAYMENT SYSTEM</h1>
		</div>
		
		
	</div>
	<div class="herr"  >
		<ul class="bti">
			<li><a href="http://localhost/login/log.php">LOGIN</a></li>
			<li><a href="http://localhost/login/reg.php">SIGN UP</a></li>
			<li><a href="">ABOUT</a></li>
		    <li><a href="">FEEDBACK</a></li>
		</ul>
	</div>
<div class="log" align="center">
	<img src="loginlogo.jpg" class="imge"><br>
	<h2><center>Log in</center></h2><br>
	<form name="frm" action="log.php" method="POST" class="fm" >
	
<label>User Name:</label><br>
			<input type="text" id="user" name="user" required="Enetr your Username">
		</p>
		<p>
			<label>password:</label><br>
			<input type="password" id="pass" name="pass" required="">
		</p>
		<p>
			<input type="submit" id="submit" name="submit">
		</p>
</form>
<div class="ph">
	<?php
	$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"login");
if (isset($_POST['user']) && isset($_POST['pass'])) {
	
	$username=$_POST['user'];
    $password=$_POST['pass'];
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);


       $result=mysqli_query($con,"select * from users where uname='$username' and pass='$password'") or die("failed".mysqli_error());
$row=mysqli_fetch_array($result);
if ($row['uname']==$username && $row['pass']== $password) {
	header("location:main.php");
	
}
else{
	echo "Invalid Username and password";
}
}


?>
</div>
<div>
	<a href="" target="_blank">Forgot password?</a><pre> </pre><a href="http://localhost/login/reg.php">Create account!</a>
</div>
</div>
</body>
</html>