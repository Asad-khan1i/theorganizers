<?php 
include 'config.php';
if($_REQUEST['destination_id']){
    $id = $_REQUEST['destination_id'];
    $sql = "DELETE FROM `destintion` WHERE `destintion`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addDestination.php");
}
if($_REQUEST['city_id']){
    $id = $_REQUEST['city_id'];
    $sql = "DELETE FROM `city` WHERE `city`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addCity.php");
}
if($_REQUEST['hotel_id']){
    $id = $_REQUEST['hotel_id'];
    $sql = "DELETE FROM `hotel` WHERE `hotel`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addHotel.php");
}
if($_REQUEST['room_id']){
    $id = $_REQUEST['room_id'];
    $sql = "DELETE FROM `room` WHERE `room`.`id` = $id";
    mysqli_query($conn, $sql);
    header("location: addRoom.php");
}

if($_REQUEST['tour_id']){
    $id = $_REQUEST['tour_id'];
    $sql = "DELETE FROM `tour` WHERE `id` = $id";
    mysqli_query($conn, $sql);
    header("location: addTour.php");
}

if($_REQUEST['hotelorder_id']){
    $id = $_REQUEST['hotelorder_id'];
    $sql = "DELETE FROM `hotelorder` WHERE `id` = $id";
    mysqli_query($conn, $sql);
    header("location: index.php");
}

if($_REQUEST['tourorder_id']){
    $id = $_REQUEST['tourorder_id'];
    $sql = "DELETE FROM `tourorder` WHERE `id` = $id";
    mysqli_query($conn, $sql);
    header("location: index.php");
}



?>




<!-- Place the first <script> tag in your HTML's <head> -->


<!-- Place the following <script> and <textarea> tags your HTML's <body> -->

<textarea>
  Welcome to TinyMCE!
</textarea>