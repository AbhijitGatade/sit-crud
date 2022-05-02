<?php
    include("connection.php");
    $query = "DELETE FROM users WHERE id = " . $_GET["id"];
    mysqli_query($con, $query);

    header("Location:index.php");
?>