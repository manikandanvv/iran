<?php
    session_start();
     $db=mysqli_connect("localhost","root","","pro");
     if (isset($_POST['submit'])) {

        $name=mysqli_real_escape_string($db,$_POST['user']);
     	$eid=mysqli_real_escape_string($db,$_POST['eid']);

        if ($name!=NULL) {
        	
        	$query="INSERT INTO pron(name,eid) VALUES('$name','$eid')";
        $run=mysqli_query($db,$query);
        if ($run) {
        	header("location:mani.html");
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