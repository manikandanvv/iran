<?php
    session_start();
     $db=mysqli_connect("localhost","root","","pro");
     if (isset($_POST['submit'])) {

        $name=mysqli_real_escape_string($db,$_POST['name']);
        $sno=mysqli_real_escape_string($db,$_POST['sno']);
        $mobile=mysqli_real_escape_string($db,$_POST['mno']);
        $area=mysqli_real_escape_string($db,$_POST['area']);
        $dist=mysqli_real_escape_string($db,$_POST['dist']);
        

        if ($name!=NULL) {
        	
        	$query="INSERT INTO pron1(name,serno,mobile,area,dist) VALUES('$name','$sno','$mobile','$area','$dist')";
        $run=mysqli_query($db,$query);
        if ($run) {
        	header("location:login.php");
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