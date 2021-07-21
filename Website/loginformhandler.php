<?php
include "conn_to_db.php";
session_start();

$uservalid = 'SELECT * FROM Assessment.Customer WHERE cust_username = ?';
$uservalid_statement = $conn->prepare($uservalid);

$username = $_POST['username'];
$password = $_POST['password'];
$passwordhash = hash_hmac('sha256', $_POST['password'], 'paradise');
// check password
$uservalid_statement->execute([$username]);
$validation = $uservalid_statement->fetch();
//if password is correct update session and send to homepage
if ($validation['cust_password'] == $passwordhash) {
    $_SESSION['cust_username'] = $username;
    header('Location: home.php');
} else {
    echo '<script>alert("Username or Password is incorrect.")</script>';
    include "home.php";
}?>



