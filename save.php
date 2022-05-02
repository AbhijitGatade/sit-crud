<?php
include("connection.php");
$name = $_POST["name"];
$address = $_POST["address"];
$mobileno = $_POST["mobileno"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$topic = $_POST["topic"];

$query = "INSERT INTO users(name, address, mobileno, email, gender, topic) ";
$query .= "VALUES('$name', '$address', '$mobileno', '$email', '$gender', '$topic')";

mysqli_query($con, $query);
header("Location:index.php");

?>