<?php 
  function addUser($conn, $n, $e, $p){
  	$sql = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
    $query = $conn->prepare($sql);
    $query->bindParam(1, $n);
    $query->bindParam(2, $e);
    $query->bindParam(3, $p);
    $query->execute();
  }
 	
  function checkUser($conn, $e, $p){
  	$sql = "SELECT email, password FROM users WHERE email = ? AND password = ?";
    $query = $conn->prepare($sql);
    $query->bindParam(1, $e);
    $query->bindParam(2, $p);
    $query->execute();
    $results = $query->fetch();
    return $results;
  }

  function startSession($e){
    session_unset();
    session_start();
    $_SESSION["email"] = $e;
    header('location: admin.php');
  }

	function getUserID($conn, $e){
		$sql = "SELECT id FROM users WHERE email = ?";
	    $query = $conn->prepare($sql);
	    $query->bindParam(1, $e);
	    $query->execute();
	    $results = $query->fetch();
	    return $results;
	  }

    function getUsername($conn, $email){
    $sql = "SELECT name FROM users WHERE email = ?";
    $query = $conn->prepare($sql);
    $query->bindParam(1, $email);
    $query->execute();
    $results = $query->fetch();
    return $results;
  }

   function changeUsername($conn, $e, $n){
    $sql = "UPDATE users SET name = ? WHERE email = ?";
    $query =$conn->prepare($sql);
    $query->bindParam(1, $n);
    $query->bindParam(2, $e);
    $query->execute();
  }