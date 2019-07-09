<?php

if (isset($_POST['submit'])) {
    include_once 'database_connect.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";

    // use exec() because no results are returned
    $conn->exec($sql);

    echo "New record created successfully";
    }

?>