<?php
include "conn_to_db.php";

$cust_id = $_SESSION['cust_id'];
$timestamp = NOW();
$neworder = "INSERT INTO Assessment.Purchase VALUES(NULL, :cust_id, :datestamp)";
$neworder_statement =$conn->prepare($neworder);
$neworder_statement->bindValue(':cust_id', $cust_id);
$neworder_statement->bindValue(':datestamp', $timestamp);
$addtodb = $neworder_statement->execute();

?><script>alert("Thank you for your order!")</script>
<?php
header('refresh:2;url=home.php');?>
