<?php
include "conn_to_db.php";

$adminvalid = 'SELECT * FROM Assessment.Admin WHERE admin_username = ?';
$adminvalid_statement = $conn->prepare($adminvalid);

$username = $_POST['username'];
$password = $_POST['password'];
$passwordhash = hash_hmac('sha256', $_POST['password'], 'paradise');
// check password
$adminvalid_statement->execute([$username]);
$validation = $adminvalid_statement->fetch();
//if password is correct update session and send to homepage
if ($validation['admin_password'] == $passwordhash) {
    session_start();
    $_SESSION['admin_username'] = $validation['admin_username'];
    header('Location: home.php');
} else {
    echo '<script>alert("Username or Password is incorrect.")</script>';
    include "adminhome.php";
}?>