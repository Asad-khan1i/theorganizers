<?php

    include 'navheader.php';
    include 'config.php';
 
?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image: url(images/bg/hotel-booking.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hotel Detail</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hotel Detail</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  

    <!-- blog starts -->
    <?php
                        $id = $_GET['id'];
                        
                        $sql = "SELECT * FROM `hotel` WHERE `id` = $id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-4">
                    <div class="single-content">

                   


                        <div class="description" id="description">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <ul class="d-md-flex mb-2">
                                        <li class="bg-pink py-1 px-3 white mr-2">Newly renovated</li>
                                        <li class="bg-navy py-1 px-3 white">Free Wi-Fi</li>
                                    </ul>
                                    <div class="d-block d-md-flex flex-horizontal-center mb-1">
                                        <h4 class="font-weight-bold mb-0 mr-2"><?php echo $row['hotelName'];  ?></h4>
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        <i class="fa fa-map-marker-alt mr-2"></i> <?php echo $row['city'];  ?>
                                        <a href="<?php echo $row['map'];  ?>"> - View on map</a>
                                    </p>
                                </div>
                            </div>

                            <div class="single-slider">
                                <div class="slider-1 slider-store">
                                <?php
                                    $imagePaths = $row['images'];
                                    $imagePaths = explode(",",$imagePaths);
                                    foreach ($imagePaths as $imagePath) {
                                    ?>
                                    <div class="detail-slider-item">
                                        <img src="dashmin-1.0.0/img/userImages/<?php echo $imagePath ?>"  height="600px" alt="image">
                                    </div>
                                <?php  } ?>
                                    
                                </div>
                                <div class="slider-1 slider-thumbs">
                                <?php
                                    $imagePaths = $row['images'];
                                    $imagePaths = explode(",",$imagePaths);
                                    foreach ($imagePaths as $imagePath) {
                                    ?>
                                    <div class="detail-slider-item">
                                    <img src="dashmin-1.0.0/img/userImages/<?php echo $imagePath ?>" alt="image">
                                    </div>
                                    <?php  } ?>
                                    
                                    
                                </div>
                            </div>
                            <div class="description-inner mb-2 mt-1">
                                <h4>Description</h4>
                                <p> <?php echo $row['description']; ?> </p>
                            </div>

               
                            <div class="description-inner">
                                <h4>Select Your Room</h4>
                                        
                                <?php
                                    
                                $roomSql = "select * from `room` WHERE `hotel`='$id'";
                                $roomResult = mysqli_query($conn, $roomSql);
                                while($roomRow = mysqli_fetch_assoc($roomResult)) {
                                ?>
                                

                                <div class="product-item__outer w-100 border p-4 mb-2">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="product-item__header">
                                                <img class="img-fluid w-100" src="dashmin-1.0.0/img/userImages/<?php echo $roomRow['image']; ?>" alt="Image Description">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-lg-5">
                                            <div class="rooms-content py-2">
                                                <h5 class="mb-1"><a href="#" class="font-weight-bold"><?php echo $roomRow['type']; ?></a></h5>
                                                <div class="row">
                                                <?php
                                    $services = $roomRow['services'];
                                    $services = explode(",",$services);
                                    foreach ($services as $service) {
                                    ?>
                                                    <div class="col-lg-6 col-md-6 mb-1"><img src="images/checklist.png" alt=""><?php echo $service; ?></div>
                                                   <?php } ?>
                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <form action="">
                                                <label for="roomNumbers" class="form-label">No. of Rooms</label>
                                                <input type="number" class="" name="roomNumbers" value="1">
                                            </form>
                                            <div class="rooms-pricing text-center">
                                                <p class="mb-1">From <span class="font-weight-bold ml-1"><?php echo $roomRow['price']; ?></span>
                                                    <span> / night</span>
                                                </p>
                                                <a href="#" class="nir-btn w-100">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>

                                
                            </div>
                        </div>

                        

                        <div class="single-map mb-4" id="single-map">
                            <h4>Map</h4>
                            <div class="map">
                                <div style="width: 100%">
                                <?php echo $row['map']; ?>
                                </div>
                            </div>
                        </div>

                        

                        <!-- blog review -->
                        <div class="single-add-review" id="single-add-review">
                         
                            
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item d-flex align-items-center">
                                <span class="border py-1 px-2 mr-2"><a href="#"><i class="flaticon-like"></i></a></span>
                                <span class="border py-1 px-2 mr-2"><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                                <span class="ml-2"><strong class="pink">Excellent</strong> (38 Reviews)</span>
                            </div>
                        </div>
                        <div class="sidebar-item mb-4">
                            <form class="form-content">
                                <h4 class="title white font-weight-normal">From <span class="font-weight-bold">£350.00</span> / night</h4>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check In</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range0" type="text" placeholder="yyyy-mmm-dd">
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check Out</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range1" type="text" placeholder="yyyy-mm-dd">
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Adult</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Children</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <a href="#" class="nir-btn w-100"><i class="fa fa-search"></i> Check Availability</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <h3>Popular Rooms</h3>
                                <div class="about-slider">
                                    <div class="trend-item mb-0">
                                        <div class="trend-image">
                                            <img src="images/rooms/list1.jpg" alt="image">
                                            <div class="deal-item bg-pink py-1 px-2">
                                                <p class="mb-0 white"><i class="fa fa-map-marker mr-2"></i> Greater London, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="trend-content-main shadow-none">
                                            <div class="trend-content pb-0">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4 class="bordernone pt-1"><a href="#">Empire Prestige Causeway Bay</a></h4>
                                                <p class="mb-2">
                                                    From: <span class="font-weight-bold pink">£350.00 </span>/ Night
                                                </p>
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trend-item mb-0">
                                        <div class="trend-image">
                                            <img src="images/rooms/list2.jpg" alt="image">
                                            <div class="deal-item bg-pink py-1 px-2">
                                                <p class="mb-0 white"><i class="fa fa-map-marker mr-2"></i> Lyuishen Tokya, Japan</p>
                                            </div>
                                        </div>
                                        <div class="trend-content-main shadow-none">
                                            <div class="trend-content pb-0">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4 class="bordernone pt-1"><a href="#">Park Avenue Baker Street</a></h4>
                                                <p class="mb-2">
                                                    From: <span class="font-weight-bold pink">£450.00 </span>/ Night
                                                </p>
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h3>Why Book With Us?</h3>
                                <div class="services-list">
                                    <div class="d-flex align-items-center mb-2 pb-2 border-b">
                                        <i class="fa fa-tag pink mr-2"></i>
                                        <span>No-hassle best price guarantee</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2 pb-2 border-b">
                                        <i class="fa fa-phone-alt pink mr-2"></i>
                                        <span>Customer care available 24/7</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2 pb-2 border-b">
                                        <i class="fa fa-star pink mr-2"></i>
                                        <span>Hand-picked Tours & Activities</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-plane pink mr-2"></i>
                                        <span>Free Travel Insureance</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <?php } ?>
    <!-- blog Ends -->  

    <?php
    include 'footer.php';
    ?>