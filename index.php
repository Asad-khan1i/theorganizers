<?php
    include 'navheader.php';
    include 'config.php';

?>

    <!-- banner starts -->
    <section class="banner overflow-hidden">
        <div class="slider video-slider">
            <div class="banner-outer">
                <div class="video-banner">
                    <video autoplay muted loop id="vid">
                        <source src="images/tour.mp4" type="video/mp4">
                    </video>
                    <div class="overlay"></div>
                </div>
                <div class="swiper-content">
                    <h4 class="white">Amazing Places</h4>
                    <h1 class="white mb-4">Explore Your Life Travel Where You Want</h1>
                    <a href="#" class="per-btn">
                      <span class="white">Discover</span>
                    <i class="fa fa-arrow-right white"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner ends -->

    <!-- form starts -->
    
    <!-- form ends -->

    <!-- hotel and tour toggle -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul class="select-section">
                        <li>
                            <a  href="#hotel">
                                <img src="images/trending/hotel.svg" width="50px" height="50px" alt="">
                               <br> <span>Hotel</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tripSection">
                                <img class="svg-hover" src="images/trending/trip.svg" width="50px" height="50px" alt="">
                               <br> <span>Trip</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- hotel and tour toggle end -->

    <!-- Fav destination Starts -->
    <section id="tripSection" class="trending destination pb-6 pt-5" >
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Find Your <span>Favourite Destination</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>  
            <div class="trend-box">
                <div class="price-navtab text-center mb-4">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#historical">Historical</a></li>
                        <li><a data-toggle="tab" href="#weekend">Weekend</a></li>
                        <li><a data-toggle="tab" href="#holidays">Holidays</a></li>
                        <li><a data-toggle="tab" href="#special">Special Tour</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="historical" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/1.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/2.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada New Year Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/2.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/3.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Christmas Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="weekend" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending14.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Weekend Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending13.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada Weekend Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/2.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending7.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Weekend Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="holidays" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending2.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending3.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/2.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending4.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Holidays Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="special" class="tab-pane fade">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending6.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Nepal Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 852 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Nepal.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending5.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">38 Reviews</span>
                                            </div>
                                            <h4><a href="#">Canada Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 615 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> Canada.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/2.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/trending/trending9.jpg" alt="image">
                                    </div>
                                    <div class="trend-content-main">
                                        <div class="trend-content">
                                            <div class="rating-main d-flex align-items-center pb-1">
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                </div>
                                                <span class="ml-2">25 Reviews</span>
                                            </div>
                                            <h4><a href="#">America Special Tour</a></h4>
                                            <p class="mb-0"><i class="fa fa-eye mr-1"></i> 926 Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> America.</p>
                                        </div>
                                        <div class="trend-last-main">
                                            <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            <div class="trend-last d-flex align-items-center justify-content-between">
                                                <p class="mb-0 white d-flex align-items-center"><img src="images/reviewer/1.jpg" class="d-author mr-2" alt=""> Thu Astudillo</p>
                                                <div class="trend-price">
                                                    <p class="price white mb-0"><a href="#"><i class="flaticon-like white"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section>
    <!-- Fav destination Ends -->

   
    <!-- Trending Starts -->
    <section class="trending destination-b pb-6 pt-9">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Perfect <span>Tour Packages</span></h2>
            <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div>  

        <div class="trend-box">
            <div class="row team-slider">
                <?php
                // Your database connection code goes here

                // Sample query to fetch tour packages data
                $sql = "SELECT * FROM `tour` ";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="trend-item">
                            <div class="trend-image">
                                <img src="dashmin-1.0.0/img/userImages/<?php echo $row['featureImg']; ?>" alt="image">
                                <div class="trend-tags">
                                    <a href="#"><i class="flaticon-like"></i></a>
                                </div>
                            </div>
                            <div class="trend-content-main">
                                <div class="trend-content">
                                    <h6 class="font-weight-normal"><i class="fa fa-map-marker-alt"></i> <?php echo $row['city']; ?></h6>
                                    <h4><a href="#"><?php echo $row['tourname']; ?></a></h4>
                                    <div class="rating-main d-flex align-items-center">
                                        <!-- Your rating display code goes here -->
                                    </div>
                                </div>
                                <div class="trend-last-main">
                                    <p class="mb-0 trend-para"><?php echo $row['description']; ?></p>
                                    <div class="trend-last d-flex align-items-center justify-content-between">
                                        <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['duration']; ?></p>
                                        <div class="trend-price">
                                            <p class="price white mb-0">From <span><?php echo $row['price']; ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center" >
                <button type="button" class="btn seeMoreBtn"><a href="" class="seeMore">See More</a></button>
            </div>
        </div>
    </div>
</section>


    <!-- Trending Ends -->


    

    <!-- hotel starts -->
    <section id="hotel" class="top-destination overflow-hidden pt-9">
    <div class="container">
        <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
            <h4 class="font-weight-normal mb-0 white">Best Hotels</h4>
            <h2 class="m-0 white">Choose Your <span>Best Country</span></h2>
        </div>  

        <div class="desti-inner">
            <div class="row d-flex align-items-center">
                <?php
                // Your database connection code goes here

                // Sample query to fetch hotel data
                $sql = "SELECT * FROM hotel";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-4 col-md-6 p-1">
                        <div class="desti-image">
                            <img src="dashmin-1.0.0/img/userImages/<?php echo $row['featureImg']; ?>" alt="desti">
                            <div class="desti-content hotel-content d-flex align-items-center justify-content-between bg-white py-2 px-3">
                                <div class="desti-content-left">
                                    <h4 class="mb-0 navy"><?php echo $row['city']; ?></h4>
                                   
                                </div>
                                <div class="desti-content-left">
                                    <h4 class="mb-0 pink">$<?php echo $row['price']; ?></h4>
                                    <span>Per Day</span>
                                </div>
                            </div>
                            <div class="desti-overlay">
                                <a href="#" class="nir-btn">
                                    <span class="white">Book Now</span>
                                    <i class="fa fa-arrow-right white pl-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 d-flex justify-content-center" style="margin-top: 10px;">
                <button type="button" class="btn seeMoreBtn"><a href="" class="seeMore">See More</a></button>
            </div>
        </div> 
    </div>   
    <div id="particles-js"></div> 
</section>
    <!-- hotel ends -->

    <!-- Trending Starts -->
    <!-- <section class="latest-tour pb-5 pt-0">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Amamzing <span>Latest Tour</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div>  
            <div class="tour-box">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="images/destination/destination4.jpg" alt="Image">
                            </div>
                            <div class="tour-content">
                                <div class="rating-main d-flex align-items-center mb-1">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ml-2 white">38 Reviews</span>
                                </div>
                                <h3 class="mb-1"><a href="#" class="white">Hills and Beach Tour</a></h3>
                                <div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
                                    <p class="white mb-0 mr-"><i class="fa fa-clock white mr-1"></i> 5 days</p>
                                    <p class="white mb-0"><i class="fa fa-user-plus white mr-1"></i> 51</p>
                                </div>
                                <p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
                                <a href="tour-detail.html" class="nir-btn" tabindex="0">View More</a>
                            </div>
                            <div class="tour-tag">
                                <span class="old-price white">$1449</span>
                                <span class="new-price white"> $900</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="images/destination/destination5.jpg" alt="Image">
                            </div>
                            <div class="tour-content">
                                <div class="rating-main d-flex align-items-center mb-1">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ml-2 white">18 Reviews</span>
                                </div>
                                <h3 class="mb-1"><a href="#" class="white">Special Asia Tour</a></h3>
                                <div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
                                    <p class="white mb-0 mr-"><i class="fa fa-clock white mr-1"></i> 5 days</p>
                                    <p class="white mb-0"><i class="fa fa-user-plus white mr-1"></i> 51</p>
                                </div>
                                <p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
                                <a href="tour-detail.html" class="nir-btn" tabindex="0">View More</a>
                            </div>
                            <div class="tour-tag">
                                <span class="new-price white"> $800</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                        <div class="tour-item">
                            <div class="tour-image">
                                <img src="images/destination/destination8.jpg" alt="Image">
                            </div>
                            <div class="tour-content">
                                <div class="rating-main d-flex align-items-center mb-1">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ml-2 white">21 Reviews</span>
                                </div>
                                <h3 class="mb-1"><a href="#" class="white">Couple & Holidays Tour</a></h3>
                                <div class="user-main d-flex align-items-center justify-content-between mb-2 pb-2 border-b">
                                    <p class="white mb-0 mr-"><i class="fa fa-clock white mr-1"></i> 5 days</p>
                                    <p class="white mb-0"><i class="fa fa-user-plus white mr-1"></i> 51</p>
                                </div>
                                <p class="white mb-3">A wonderful little cottage right on the seashore - perfect for exploring with the little boat.</p>
                                <a href="tour-detail.html" class="nir-btn" tabindex="0">View More</a>
                            </div>
                            <div class="tour-tag">
                                <span class="old-price white">$549</span>
                                <span class="new-price white"> $400</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </section> -->
    <!-- Trending Ends -->

    <!-- testomonial start -->
    <section class="testimonial pt-0 pb-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">What <span>People Say About Us</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div> 
            <div class="row about-slider w-75 mx-auto">
                <div class="col-sm-4 item">
                    <div class="testimonial-item text-center">
                        <div class="details">
                            <i class="fa fa-quote-left mb-2"></i>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img1.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 yellow">Jared Erondu</h4>
                                <span>Supervisor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item text-center">
                        <div class="details">
                            <i class="fa fa-quote-left mb-2"></i>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem  Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img2.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 yellow">Cadic Vegeta</h4>
                                <span>Sr. Chef</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 item">
                    <div class="testimonial-item text-center">
                        <div class="details">
                            <i class="fa fa-quote-left mb-2"></i>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry's standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.</p>
                        </div>
                        <div class="author-info mt-2">
                            <a href="#"><img src="images/testimonial/img3.jpg" alt=""></a>
                            <div class="author-title">
                                <h4 class="m-0 yellow">Jonathan Beri</h4>
                                <span>Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial ends --> 

    <!-- News Starts -->
    <!-- <section class="news pb-6 bg-grey pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Latest Some <span>Tips & Articles</span></h2>
                <p class="mb-0 ">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div> 
            <div class="news-outer">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
                        <div class="news-item overflow-hidden bg-white p-4">
                            <div class="news-image">
                                <img src="images/blog/blog1.jpg" alt="image">
                            </div>
                            <div class="news-list mt-2 border-b pb-2 mb-2">
                                <ul>
                                    <li><a href="single-right.html" class="pr-3"><i class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                    <li><a href="single-right.html" class="pr-3"><i class="fa fa-comment pink pr-1"></i> 3</a></li>
                                    <li><a href="single-right.html" class=""><i class="fa fa-tag pink pr-1"></i> Tour, Tourism, Travel</a></li>
                                </ul>
                            </div>
                            <div class="news-content mt-2">
                                <h4 class="pb-2 mb-2 border-b"><a href="single-right.html">The real voyage does not consist in seeking new landscapes</a></h4>
                                <p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked being court hopes.</p>

                                <div class="author-img">
                                    <img src="images/reviewer/1.jpg" alt="Demo Image">
                                    <span>By - Jack Well Fardez</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="news-item overflow-hidden bg-white p-4">
                            <div class="news-image">
                                <img src="images/blog/blog2.jpg" alt="image">
                            </div>
                            <div class="news-list mt-2 border-b pb-2 mb-2">
                                <ul>
                                    <li><a href="single-right.html" class="pr-3"><i class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                    <li><a href="single-right.html" class="pr-3"><i class="fa fa-comment pink pr-1"></i> 3</a></li>
                                    <li><a href="single-right.html" class=""><i class="fa fa-tag pink pr-1"></i> Tour, Tourism, Travel</a></li>
                                </ul>
                            </div>
                            <div class="news-content mt-2">
                                <h4 class="pb-2 mb-2 border-b"><a href="single-right.html">The real voyage does not consist in seeking new landscapes</a></h4>
                                <p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked being court hopes.</p>

                                <div class="author-img">
                                    <img src="images/reviewer/2.jpg" alt="Demo Image">
                                    <span>By - Jack Well Fardez</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-4">
                        <div class="news-item overflow-hidden bg-white p-4">
                            <div class="news-image">
                                <img src="images/blog/blog3.jpg" alt="image">
                            </div>
                            <div class="news-list mt-2 border-b pb-2 mb-2">
                                <ul>
                                    <li><a href="single-right.html" class="pr-3"><i class="fa fa-calendar pink pr-1"></i> 4th AUg 2020 </a></li>
                                    <li><a href="single-right.html" class="pr-3"><i class="fa fa-comment pink pr-1"></i> 3</a></li>
                                    <li><a href="single-right.html" class=""><i class="fa fa-tag pink pr-1"></i> Tour, Tourism, Travel</a></li>
                                </ul>
                            </div>
                            <div class="news-content mt-2">
                                <h4 class="pb-2 mb-2 border-b"><a href="single-right.html">The real voyage does not consist in seeking new landscapes</a></h4>
                                <p class="mb-3">Excited him now natural saw passage offices you minuter. At by asked being court hopes.</p>

                                <div class="author-img">
                                    <img src="images/reviewer/1.jpg" alt="Demo Image">
                                    <span>By - Jack Well Fardez</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- News Ends -->

    <!-- Discount action starts -->
    <section class="discount-action p-0">
        <div class="call-banner" style="background-image: url(images/bg/bg7.jpg);">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-xs-12 p-0">
                    <div class="call-banner-inner text-center bg-blue">
                        <h4 class="white">25% OFF SALE</h4>
                        <h2 class="white mb-4">Best Holiday Packages For<span class="text-uppercase d-block">Honeymoon</span></h2>
                        <a href="#" class="nir-btn-black">Book Your Flight Now <i class="fa fa-arrow-right white pl-1"></i></a>
                    </div>
                </div>  
                <div class="col-lg-6 col-xs-12 p-0">
                    <div class="call-banner-inner text-left p-5">
                        <h4 class="white">24x7 Service Available</h4>
                        <h2 class="white mb-4">Call Now And Book Your Flight For Your Next Destination</h2>
                        <a href="#" class="nir-btn">Call For Booking <i class="fa fa-arrow-right white pl-1"></i></a>
                    </div>
                </div> 
            </div>      
        </div> 

        <div class="overlay"></div>   
    </section>
    <!-- Discount action Ends -->

   <?php
    include 'footer.php';
   ?>