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
.ppp{
	margin-left: 120px;
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
.tbl {
	border: 1px solid black;
}
.tbl th,tr,td{
	border: 1px solid black;
	width: 140px;
}
.tbl td{
	width: 50px;
	height: 50px;
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
	<div class="ppp">
		<h2>BILL payments</h2>
		<form action="out1.php" method="POST">
		Enter your ServiceNO<input type="number" name="id" id="id">
		<input type="submit" name="submit" id="submit"></form>
<?php
	$con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"pro");
    if (isset($_POST['user'])){

    	$result=mysqli_query($con,"select * from pron1") or die("failed".mysqli_error());


    $eid=$_POST['eid'];
    $eid=stripcslashes($eid);
    
    $username = mysqli_real_escape_string($con,$eid);

    $row=mysqli_query($con,"select * from pron1 where serno='$eid'") or die("failed".mysqli_error());
    $result=mysqli_fetch_array($row);
}
    
    
  ?>
     <table class="tbl">
     <th>Name</th>
     <th>Service No</th>
     <th>MobileNO</th>
     <th>Area</th>
     <th>dist</th>
     <th>Unit</th>
     <th>Amount</th>

<?php
      if ($row['serno']==$eid) {
      	echo "<tr><td>".$row['name']."</td>";
      	echo "<td>".$row['serno']."</td>";
      	echo "<td>".$row['mobile']."</td>";
      	echo "<td>".$row['area']."</td>";
      	echo "<td>".$row['dist']."</td>";
      	echo "<td>".$row['unit']."</td>";
      	echo "<td>".$row['amount']."</td></tr>";
      }

   
?>
</table>
	</div>
</body>
</html>