<?php

session_start();


require 'config/db.php';

$errors = array();
$username ="";



//if user clicks sign up

if (isset($_POST['signup-btn']))  {
    $username = $_POST['username'];
    $passwordConf = $_POST['passwordConf'];

    //validation


    if (empty($username)) {
        $errors['username'] = "Username required";

    }

    if (empty($password)) {
        $errors['password'] = "Password required";

    }

    if ($password !== $passwordConf) {
        $errors['password'] = "Passwords don't match";
    }

   
    $nameQuery = "SELECT * FROM `users` WHERE username=? LIMIT 1";
    $stmt = $conn->prepare($usernameQuery);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;



    $stmt->close();

    if (userCount > 0) {
        $errors['username'] = "Username taken";
    }

    
    if (count($errors) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));

       
        $sql = "INSERT INTO users (username, token, password,) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $username, $token, $password);


       if  ( $stmt->execute()) {

        //user login

        $user_id = $conn->insert_id;
        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
        //flash message
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['alert-class'] = "alert-success";
        header('location: index.php');
        exit();

       } else  {

        $errors['db_error'] = "Database error: failed to register";
       }



    }


    
}