<?php

if (isset($_POST['submit'])) {
    include_once 'database_connect.php';

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    

    

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
    $stm = $conn->prepare($sql);
    $stm->bindParam(':user_first', $firstname);
    $stm->bindParam(':user_last', $lastname);
    $stm->bindParam(':user_email', $email);
    $stm->bindParam(':user_uid', $username);
    $stm->bindParam(':user_pwd', $password);

    $stm->execute();
    echo "New record created successfully";
}

/*
if ($conn) {
        header("Location: ../signup.php");
        echo "Thanks!";
    }


    //ERROR HANDLERS:
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is invalid.";
    }
    else{}
    */
?>