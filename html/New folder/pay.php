<!DOCTYPE html>
<html>
<head>
	<title>Online Bill Payment</title>
	<style type="text/css">
		body
{
	border: 1px solid green;
	height: 800px;
}
.log
{
	width: 420px;
	height: 240px;
	padding: 5px 5px;
	color: black;
	font-size: 20px;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-25%);
	box-sizing: border-box;
	border:white;
	padding: 5px 10px;
	text-align: left;
	margin-top: 10px;
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
	</style>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			  $('input[type="radio"]').click(function(){
			  	var iv=$(this).attr("value");
			  	var tt=$("."+iv);
			  	$(".s").not(tt).hide();
			  	$(tt).css('display','block');

			  });
		});
	</script>
	<script type="text/javascript" src="asd.js"></script>
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
	<div class="log">
		<h3>PAYMENT DETAILS</h3>
		<form name="ff" action="out.php" method="POST">
		<table>
			
			<tr>
				<td></td><td>
					<input type="radio" name="redAnswer" id="cc" value="cc">Creditcard<br>
					<div id="ccs"  class="cc s" style="border: 1px solid black; display: none;">
						<form>
							<h4>Card details</h4>
							<table>
								<tr>
									 <td>Card holder name</td><td><input type="text" name="cname" id="cname" ></td>
								</tr>
								<tr>
									<td>CardNO</td><td><input type="number" name="cno" id="cno" > </td>
								</tr>
								<tr><td><input type="number" name="cvv" id="cvv" placeholder="cvv" ></td>
                                 <td><input type="date" name="date" id="date" style="margin-left: 23px;" ></td>
								</tr>
							</table>
						</form>
					</div>
					<input type="radio" name="redAnswer" id="nb" value="nb">Netbanking<br>
					<div id="nbs"  class="nb s" style="border: 1px solid black; display: none;">
						<form>
							<h4>Netbanking</h4>
							<table>
								<tr>
									 <td>Name</td><td><input type="text" name="cname" id="cname" ></td>
								</tr>
								<tr>
									<td>AccountNo</td><td><input type="number" name="cno" id="cno" ></td>
								</tr>
								<tr>
									<td>Bankname</td><td>
										<input type="text" name="bname" id="bname" >
									</td>
								</tr>
							</table>
						</form>
					</div>
					<input type="radio" name="redAnswer" id="pp" value="pp">Phonepe<br>
					<div id="pps" class="pp s" style="border: 1px solid black; display: none;">
						<form>
							<h4>Phonepe</h4>
							<table>
								<tr>
									 <td>Name</td><td><input type="text" name="cname" id="cname" ></td>
								</tr>
								<tr>
									<td>Mobile number</td><td><input type="number" name="cno" id="cno" ></td>
								</tr>
								<tr>
									<td>password</td><td>
										<input type="text" name="bname" id="bname" >
									</td>
								</tr>
							</table>
						</form>
					</div>
					<input type="radio" name="redAnswer" id="gp" value="gp">Googlepay<br>
					<div id="gps"  class="gp s" style="border: 1px solid black; display: none;">
						<form>
							<h4>Google pay</h4>
							<table>
								<tr>
									 <td>Name</td><td><input type="text" name="cname" id="cname" ></td>
								</tr>
								<tr>
									<td>Mobile number</td><td><input type="number" name="cno" id="cno" ></td>
								</tr>
								<tr>
									<td>password</td><td>
										<input type="text" name="bname" id="bname" >
									</td>
								</tr>
							</table>
						</form>
					</div>
				</td>
			</tr>
			<tr>
				<td></td><td><input type="submit" name="submit" id="submit" value="pay"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>