<?php

session_start();

if (isset($_POST['login'])) {
	include 'database_connect.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username != "" && $password != "") {
    try {
      $sql = "SELECT * from `users` WHERE `user_uid`=:username and `user_pwd`=:password";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam('username', $username, PDO::PARAM_STR);
      $stmt->bindValue('password', $password, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);

      if($count == 1 && !empty($row)) {
        /*$_SESSION['sess_user_id']   = $row['uid'];
        $_SESSION['sess_user_name'] = $row['username'];
        $_SESSION['sess_name'] = $row['name'];*/
        echo "Your are logged in!";
       
      } else {
        echo "Invalid username and password!";
      }
    } catch (PDOException $e) {
      echo "Error : ".$e->getMessage();
    }
  } else {
    echo "Both fields are required!";
  }
}

else{
	
}