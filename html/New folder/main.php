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
.new
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
	border: 1px solid black;
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
.ph{
	color: red;
}
	</style>
		<script type="text/javascript">
		function fun() {
		
			var unit=document.getElementById('unit').value;

			var ans=unit*8;

			document.getElementById('amot').innerHTML="Total Eb bill Rs:"+ans
			document.getElementById('ans').value=ans;		}

			
	</script>
</head>
<body>
	<div class="header" id="header">
		<div class="heading">
			<h1>ONLINE EB BILL PAYMENT SYSTEM</h1>
		</div>
		<div class="herr"  >
		<ul class="bti">
			<li><a href="http://localhost/web/login.php ">LOGIN</a></li>
			<li><a href="http://localhost/web/reg.html">SIGN UP</a></li>
			<li><a href="">ABOUT</a></li>
		    <li><a href="">FEEDBACK</a></li>
		</ul>
	</div>
	</div>
	<div class="new" id="new">
		<h3>EB BILL DETAILS</h3>
		<form name="fff" action="main.php" method="POST">
			
			<table>
				<tr>
					<td>EB serviceNO</td><td><input type="" name="eid" id="eid" required="" maxlength="5"></td>
				</tr>
				<tr>
					<td>NO of units</td><td><input type="number" name="unit" id="unit" required="" onblur="fun()"></td>
					<tr><td></td><td>per unit 8 Rs</tr>
				</tr>
				<tr>
					<td>Mobile NO</td><td><input type="" name="number" id="number" maxlength="9"></td>
				</tr>
				<tr><td></td><td><label id="amot" name="amot" style="color: red"></label></td></tr>
				<tr><td></td><td><input type="submit" name="submit" id="submit" value="pay"></td></tr>
			</table>
			<input type="hidden" name="ans" id="ans">
			
			
		</form>
	</div>
	<div>
		<?php
    session_start();
     $db=mysqli_connect("localhost","root","","pro");
     if (isset($_POST['submit'])) {

        $eid=mysqli_real_escape_string($db,$_POST['eid']);
        $nou=mysqli_real_escape_string($db,$_POST['unit']);
        $ans=mysqli_real_escape_string($db,$_POST['ans']);
        
        if ($eid!=NULL) {
       	
        $query="UPDATE pron1 SET unit='$nou',amount='$ans',payment='payed' WHERE serno='$eid'";
        $run=mysqli_query($db,$query);


        if ($run) {

                 header("location:pay.php");
        }
        else  {
        	echo "Please process again not update ";
        }

        }
        else
        {

        	$_SESSION['message']="invalid";
        }

        
     }
 ?>
	</div>
</body>
</html>