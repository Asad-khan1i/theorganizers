<?php 
include 'config.php';
$uploadedPaths = array();
if(isset($_REQUEST['enterHotel'])){
    $hotelName = $_POST['hotelName'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $map = $_POST['map'];
    $destination = $_POST['destination'];
    $description = $_POST['desc'];
    $featureImgFile = $_FILES['featureImg']['name'];
    $featureImgTmpName = $_FILES['featureImg']['tmp_name'];
    $imagesFile = $_FILES['images']['name'];
    $imagesTmpName = $_FILES['images']['tmp_name'];
    $folder = "img/userImages/" . $featureImgFile;
    move_uploaded_file($featureImgTmpName, $folder);
    for ($i = 0; $i < count($imagesFile); $i++) {
        $fileName = $imagesFile[$i];
        $tmpName = $imagesTmpName[$i];
        $folder = "img/userImages/" . $fileName;
        // Move the uploaded file to the desired folder
        move_uploaded_file($tmpName, $folder);
        // Add the uploaded image path to the array
        $uploadedPaths[] = $fileName;
        // Insert the uploaded image path into the database
    }
    $uploadedPaths = implode(",",$uploadedPaths);
    $sql = "INSERT INTO `hotel` (`id`, `hotelName`, `city`, `featureImg`, `images`, `map`, `destination`, `price`, `description`) VALUES (NULL, '$hotelName', '$city', '$featureImgFile', '$uploadedPaths', '$map', '$destination', '$price', '$description');";
    mysqli_query($conn, $sql);
    header("location: addHotel.php");

}

if(isset($_REQUEST["enterRoom"])) {
    $type = $_POST['type'];
    $services = $_POST['services'];
    $hotelName = $_POST['hotelName'];
    $fileName = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $folder = "img/userImages/" . $fileName;
    $price = $_POST['price'];
    move_uploaded_file($tmp_name,$folder);
    foreach ($services as $service) {
        $uploadedService[] = $service;
   }
   $uploadedService = implode(",",$uploadedService);
    $sql = "INSERT INTO `room` (`type`, `services`, `image`, `price`, `hotel`) VALUES ('$type', '$uploadedService', '$fileName', '$price', $hotelName)";
    mysqli_query($conn, $sql);
    header("location: addRoom.php");

}

$uploadedPaths = array();
if(isset($_REQUEST['entertour'])){
    $hotelName = $_POST['tourname'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $map = $_POST['map'];
    $services = $_POST['services'];
    $description = $_POST['desc'];
    $days = $_POST['days'];
    $person = $_POST['person'];
    $departureDate = $_POST['departureDate'];
    $arrivalDate = $_POST['arrivalDate'];
    $age = $_POST['age'];
    $pickupPoint = $_POST['pickupPoint'];
    $language = $_POST['language'];
    $departureLocation = $_POST['departureLocation'];
    $room = $_POST['room'];
    $departureTime = $_POST['departureTime'];
    $arrivalTime = $_POST['arrivalTime'];
    $featureImgFile = $_FILES['featureImg']['name'];
    $featureImgTmpName = $_FILES['featureImg']['tmp_name'];
    $imagesFile = $_FILES['images']['name'];
    $imagesTmpName = $_FILES['images']['tmp_name'];
    $folder = "img/userImages/" . $featureImgFile;
    move_uploaded_file($featureImgTmpName, $folder);
    for ($i = 0; $i < count($imagesFile); $i++) {
        $fileName = $imagesFile[$i];
        $tmpName = $imagesTmpName[$i];
        $folder = "img/userImages/" . $fileName;
        // Move the uploaded file to the desired folder
        move_uploaded_file($tmpName, $folder);
        // Add the uploaded image path to the array
        $uploadedPaths[] = $fileName;
        }
    foreach ($services as $service) {
            $uploadedService[] = $service;
       }
       $uploadedPaths = implode(",",$uploadedPaths);
       $uploadedService = implode(",",$uploadedService);

$sql = "INSERT INTO `tour` (`id`, `tourname`, `city`, `price`, `images`, `featureImg`, `duration`, `description`, `days`, `person`, `departureDate`, `arrivalDate`, `age`, `pickupPoint`, `language`, `departureLocation`, `room`, `departureTime`, `arrivalTime`, `services`)
 VALUES (NULL, '$tourname', '$city', '$price', '$uploadedPaths', '$featureImgFile', '$duration', '$description', '$days', '$person', '$departureDate', '$arrivalDate', '$age', '$pickupPoint', '$language', '$departureLocation', '$room', '$departureTime', '$arrivalTime', '$services')";
$result= mysqli_query($conn, $sql);
header("location: addTour.php");
}















?>