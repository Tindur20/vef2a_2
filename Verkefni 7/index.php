<?php 	
	include "dbcon.php";			// gagnagrunnstenging
	include "dbqueries.php";    	// færslur
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verkefni 7</title>
</head>
<body>
  <?php
      if (isset($_POST['email']) && $_POST['email']!='' &&  $_POST['pass'] !='') {
        $email = $_POST['email'];
        $pass = hash('md2', $_POST['pass']);
        $data = checkUser($conn, $email, $pass);
        echo $data['email'];
        startSession($data['email']);
      }
   ?>
  <form method="post" action="index.php">
    email:
    <input type="email" name="email" required><br>
    password:
    <input type="password" name="pass" required><br>
    <input type="submit">
  </form>

 	<a href="register.php">Register</a>
</body>
</html>