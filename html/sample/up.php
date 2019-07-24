<?php

     session_start();

     if (isset($_POST['submit'])) {
     	if (isset($_FILES['img']['name'])) {
     		
     	

        $target="login/".basename($_FILES['img']['name']);

        $db=mysqli_connect("localhost","root","","photos");

        $image=$_FILES['img']['name'];
        $name=$_POST['text'];
        $query="INSERT INTO images(filename,mname) VALUES ('$image','$name')";
        mysqli_query($db,$query);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
        	echo "success";
        }else{
        	echo "again";
        }
        }
        
     }


        

  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>up</title>
  </head>
  <body>
  	<form name="frm" action="up.php" method="POST" class="fm" >
  		<input type="file" name="img" id="img">
  		<input type="text" name="text" id="text">
  		<input type="submit" name="submit" id="submit">
  		
  	</form>
  
  </body>
  </html>