<?php

    include 'config.php';
    $uploadedPaths = array();
if(isset($_POST["updateHotel"])){
    $id = $_POST['id'];
    $hotelName = $_POST['hotelName'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $map = $_POST['map'];
    $services = $_POST['services'];
    $description = $_POST['desc'];
    $imagesFile = $_FILES['images']['name'];
    $imagesTmpName = $_FILES['images']['tmp_name'];
    for ($i = 0; $i < count($imagesFile); $i++) {
        $fileName = $imagesFile[$i];
        $tmpName = $imagesTmpName[$i];
        $folder = "img/userImages/" . $fileName;
        move_uploaded_file($tmpName, $folder);
        $uploadedPaths[] = $fileName;
    }
    $uploadedPaths = implode(",",$uploadedPaths);
    $sql = "UPDATE `hotel` SET `hotelName` = '$hotelName', `city` = '$city',  `images` = '$uploadedPaths', `map` = '$map', `services` = '$services', `price` = '$price', `description` = '$description' WHERE `hotel`.`id` = '$id'";

    if(isset($_FILES['featureImg']) && $_FILES['featureImg']['error'] === UPLOAD_ERR_OK) {
        // If the 'featureImg' file is uploaded, process it as before
        $featureImgFile = $_FILES['featureImg']['name'];
        $featureImgTmpName = $_FILES['featureImg']['tmp_name'];
        $folder = "img/userImages/" . $featureImgFile;
        move_uploaded_file($featureImgTmpName, $folder);
    
        // Add the 'featureImg' field to the SQL query
        $sql = "UPDATE `hotel` SET `hotelName` = '$hotelName', `city` = '$city', `featureImg` = '$featureImgFile', `images` = '$uploadedPaths', `map` = '$map', `services` = '$services', `price` = '$price', `description` = '$description' WHERE `hotel`.`id` = '$id'";
    } else {
        // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
        $sql = "UPDATE `hotel` SET `hotelName` = '$hotelName', `city` = '$city', `images` = '$uploadedPaths', `map` = '$map', `services` = '$services', `price` = '$price', `description` = '$description' WHERE `hotel`.`id` = '$id'";
    }
    
    mysqli_query($conn, $sql);
    header("location: addHotel.php");

}
if(isset($_POST["updateRoom"])){
    $id = $_POST['id'];
    $type = $_POST['type'];
    $services = $_POST['services'];
    $price = $_POST['price'];
    

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // If the 'featureImg' file is uploaded, process it as before
        $FileName = $_FILES['image']['name'];
    $Tmp_Name = $_FILES['image']['tmp_name'];
    $folder = "img/userImages/" . $FileName;
        move_uploaded_file($Tmp_Name, $folder);
        // Add the 'featureImg' field to the SQL query
        $sql = "UPDATE `room` SET `type` = '$type', `services` = '$services', `image` = '$FileName', `price` = '$price' WHERE `room`.`id` = '$id'";
    } else {
        // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
        $sql = "UPDATE `room` SET `type` = '$type', `services` = '$services', `price` = '$price' WHERE `room`.`id` = '$id'";
    }
    mysqli_query($conn, $sql);
    header("location: addRoom.php");

}


?>

