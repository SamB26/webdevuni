<?php
include "conn_to_db.php";
//sign up a new user and adds details to db
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordconf = $_POST['passwordconf'];
$passwordhash = hash_hmac('sha256', $_POST['password'], 'paradise');
$passwordconfhash = hash_hmac('sha256', $_POST['passwordconf'], 'paradise');

if($password != $passwordconf){
    print_r("Passwords do not match, try again.");
    header("refresh:2;url=signup.php");
}else{
    $newuser = "INSERT INTO Assessment.Customer VALUES(NULL, :cust_name, :cust_username, :cust_password, :cust_email)";
    $newuser_statement =$conn->prepare($newuser);
    $newuser_statement->bindValue(':cust_name', $name);
    $newuser_statement->bindValue(':cust_username', $username);
    $newuser_statement->bindValue(':cust_email', $email);
    $newuser_statement->bindValue(':cust_password', $passwordhash);
    $addtodb = $newuser_statement->execute();
    if(!$addtodb){
        print_r("Failed to add user, try again.");
        header( "refresh:2;url=signup.php" );

    }else{
        print_r('Added user!');
        header( "refresh:2;url=login.php" );
    }
}







