<?php
include("connection.php");
$id = $_POST["id"];
$name = $_POST["name"];
$address = $_POST["address"];
$mobileno = $_POST["mobileno"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$topic = $_POST["topic"];

$query = "UPDATE users SET name = '$name', ";
$query .= "address = '$address', ";
$query .= "mobileno = '$mobileno', ";
$query .= "email = '$email', ";
$query .= "gender = '$gender', ";
$query .= "topic = '$topic' ";
$query .= "WHERE id = $id";

mysqli_query($con, $query);
header("Location:index.php");

?>