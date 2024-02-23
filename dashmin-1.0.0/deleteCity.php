<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `city` WHERE `city`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addCity.php");
?>