<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `destintion` WHERE `destintion`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addDestination.php");
?>