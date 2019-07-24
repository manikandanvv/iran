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
        	echo "Please process again not update or mismatch servise id";
        }

        }
        else
        {

        	$_SESSION['message']="invalid";
        }

        
     }
 ?>