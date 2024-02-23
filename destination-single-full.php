<?php

    include 'navheader.php';
    include 'config.php';
?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg11.jpg );">
        <div class="breadcrumb-outer pt-10">
            <div class="container  ">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10  ">
                    <h2 class="mb-8 mt-8 ">Destination single Full</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active " aria-current="page">Destination single  Full</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  
    <div class="tabs-navbar1 bg-white sticky1 p-4">
        <div class="row">
            <div class="col-md-12">
            <ul id="tabs" class="nav nav-tabs bordernone">
                <li class="nav-item">
                    <a class="nav-link " id="description-tab" data-bs-toggle="tab" href="#description"> 
                        <span>Highlight</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services">
                        <span>Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="single-map-tab" data-bs-toggle="tab" href="#single-map">
                        <span>Map</span>
                    </a>
                </li>
                <!-- Add more tabs as needed -->
            </ul>
            </div>
        </div>
    </div>

    <!-- blog starts -->
    <?php
                        $id = $_GET['id'];
                        
                        $sql = "SELECT * FROM `tour` WHERE `id` = $id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
    <section class="blog trending destination-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <div class="description-images mb-4">
                             <div class="single-slider">
                                <div class="slider-1 slider-store">
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
                        </div>

                        <div class="description" id="description">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h3 class="mb-1">Adriatic Adventure–Zagreb to Athens</h3>
                                    <div class="rating-main d-sm-flex align-items-center">
                                        <p class="mb-0 mr-2"><i class="flaticon-location-pin"></i> Greater London, United Kingdom</p>
                                        <div class="rating mr-2">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span>(1,186 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description-inner mb-2" id="description" >
                                <h4>Highlight</h4>
                                <p> <?php echo $row['description'] ?></p>
                                
                            </div>

                            <div class="tour-includes mb-2">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><i class="fa fa-clock-o pink mr-1" aria-hidden="true"></i><?php echo $row['days'] ?></td>
                                            <td><i class="fa fa-group pink mr-1" aria-hidden="true"></i> Max People : <?php echo $row['person'] ?> </td>
                                            <td><i class="fa fa-calendar pink mr-1" aria-hidden="true"></i> <?php echo $row['departureDate'] ?>- <?php echo $row['arrivalDate'] ?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-user pink mr-1" aria-hidden="true"></i> Min Age : <?php echo $row['age'] ?></td>
                                            <td><i class="fa fa-map-signs pink mr-1" aria-hidden="true"></i> Pickup : <?php echo $row['pickupPoint'] ?></td>
                                            <td><i class="fa fa-file-alt pink mr-1" aria-hidden="true"></i> Langauge : <?php echo $row['language'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="description-inner mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-2 pr-2">
                                        <div class="desc-box">
                                            <h5 class="mb-1">Departure & Return Location</h5>
                                            <p class="mb-0"><?php echo $row['departureLocation'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2 pl-2">
                                        <div class="desc-box">
                                            <h5 class="mb-1">Bedroom</h5>
                                            <p class="mb-0"><?php echo $row['room'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2 pr-2">
                                        <div class="desc-box">
                                            <h5 class="mb-1">Departure Time</h5>
                                            <p class="mb-0"><?php echo $row['departureTime'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2 pl-2">
                                        <div class="desc-box">
                                            <h5 class="mb-1">Arrival time</h5>
                                            <p class="mb-0"><?php echo $row['arrivalTime'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-2 pr-2">
                                        <div class="desc-box">
                                            <h5 class="mb-1" id="services" >Services include</h5>
                                            <?php
                                    $services = $row['services'];
                                    $services = explode(",",$services);
                                    foreach ($services as $service) {
                                    ?>
                                                    <div class="col-lg-6 col-md-6 mb-1"><i class="fa fa-check pink mr-1"></i><?php echo $service; ?></div>
                                                   <?php } ?>
                                        </div>
                                    </div>
                                  
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <!-- <div class="accrodion-grp faq-accrodion mb-4" id="iternary" data-grp-name="faq-accrodion">
                            <h4>Iternary</h4>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 1</span> - Barcelona - Zaragoza - Madrid</h5>
                                </div>
                                <div class="accrodion-content" style="display: block;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 2</span> - Zurich - Biel/Bienne - Neuchatel - Geneva</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 3</span> - Enchanting Engelberg</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-title">
                                    <h5 class="mb-0"><span>Day 4</span> - Barcelona - Zaragoza - Madrid</h5>
                                </div>
                                <div class="accrodion-content" style="display: none;">
                                    <div class="inner">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, inventore cumque veniam, praesentium velit incidunt rem quas a, quos eos ipsum, reprehenderit voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <div class="single-map mb-4" id="single-map">
                            <h4>Map</h4>
                            <div class="map">
                                <div style="width: 100%">
                                    <iframe height="400" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="single-review mb-4" id="single-review">
                            <h4>Average Reviews</h4>
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="review-box bg-pink text-center pb-4 pt-4">
                                        <h2 class="mb-1 white"><span>2.2</span>/5</h2>
                                        <h4 class="white mb-1">"Feel so much worst than thinking"</h4>
                                        <p class="mb-0 white font-italic">From 40 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="review-progress">
                                        <div class="progress-item">
                                            <p>Cleanliness</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Facilities</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                    <span class="sr-only">30% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Value for money</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Service</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Location</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                                    <span class="sr-only">45% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- blog comment list -->
                        <!-- <div class="single-comments single-box mb-4" id="single-comments">
                            <h5 class="border-b pb-2 mb-2">Showing 16 verified guest comments</h5>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="images/reviewer/1.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">The worst hotel ever"</span>
                                    </div>    
                                    
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                            <a href="#" class="love"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="images/reviewer/2.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">Was too noisy and not suitable for business meetings"</span>
                                    </div> 
                                    
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                            <a href="#" class="love"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- blog review -->
                        <!-- <div class="single-add-review" id="single-add-review">
                            <h4>Write a Review</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-btn">
                                            <a href="#" class="nir-btn">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends --> 
    
    <?php } ?>
    <?php
    include 'footer.php';
    ?>