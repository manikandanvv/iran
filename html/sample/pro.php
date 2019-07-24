<?php
    session_start();
     $db=mysqli_connect("localhost","root","","login");
     if (isset($_POST['submit'])) {

        $name=mysqli_real_escape_string($db,$_POST['name']);
     	$username=mysqli_real_escape_string($db,$_POST['uname']);
     	$password=mysqli_real_escape_string($db,$_POST['pass']);
     	$password2=mysqli_real_escape_string($db,$_POST['pass2']);
     	$mobileno=mysqli_real_escape_string($db,$_POST['mno']);
     	$city=mysqli_real_escape_string($db,$_POST['city']);

        if ($password==$password2) {
        	
        	$query="INSERT INTO users(name,uname,pass,pass2,mobileno,city) VALUES('$name','$username','$password',
        '$password2','$mobileno','$city')";
        $run=mysqli_query($db,$query);
        if ($run) {
        	header("location:log.php");
        	echo "string";
        }
        else  {
        	echo "Please create again";
        }

        }
        else
        {
        	$_SESSION['message']="invalid";
        }
        
     }




 ?>