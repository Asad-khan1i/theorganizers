

<?php 
     include 'config.php';
        include 'navheader.php';
    ?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image: url(images/bg/hotel-grid.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hotels</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hotel</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  


    <!-- blog starts -->
    <section class="blog destination-b trending pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="trend-box">
                        <div class="list-results">
                            <div class="d-flex justify-content-between align-items-center mb-2 border-b pb-2">
                                <h3 class="mb-0">London: 3292 hotels found</h3>
                                <div class="click-menu d-flex align-items-center justify-content-between">
                                    <div class="change-list mr-2"><a href="hotel-list.php"><i class="fa fa-bars"></i></a></div>
                                    <div class="change-grid f-active"><a href="hotel-grid.php"><i class="fa fa-th"></i></a></div>
                                </div>
                            </div>
                            <div class="list-results-sort d-flex align-items-center">
                                <p class="m-0"><a href="#" class="mr-2">Recommended</a></p>
                                <div class="form-group m-0 mr-2">
                                    <div class="input-box">
                                        <select class="niceSelect" id="priceFilter">
                                            <option value="1">Price</option>
                                            <option value="2">Rs 5,000-Rs 8,000</option>
                                            <option value="3">Rs 8,000-Rs 12,000</option>
                                            <option value="4">Rs 12,000-Rs 20,000</option>
                                            <option value="5">Rs 20,00-Rs 50,000</option>
                                        </select>
                                    </div>                            
                                </div>
                                <div class="sortby float-right d-flex align-items-center">
                                    <div class="form-group m-0 mr-2">
                                    <div class="input-box">
                                        <select class="niceSelect w-100" id="ratingFilter">
                                            <option value="1">star</option>
                                            <option value="2">One</option>
                                            <option value="3">Two</option>
                                            <option value="4">Three</option>
                                            <option value="5">Four</option>
                                            <option value="5">Five</option>
                                        </select>
                                    </div>                            
                                </div>
                                    <select class="niceSelect w-100" id="sortByFilter">
                                        <option value="1" >Sort By</option>
                                        <option value="2">Average rating</option>
                                        <option value="3">Price: low to high</option>
                                        <option value="4">Price: high to low</option>
                                    </select> 
                                </div>
                            </div>
                        </div>

                        <div class="container">

                        <div class="row" id="hotelList">

                        <?php
                        
                        $sql = "SELECT * FROM `hotel`  ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>


<div class="col-lg-6 col-md-6 mb-4" >
    <div class="trend-item">
        <div class="trend-image">
            <img src="dashmin-1.0.0/img/userImages/<?php echo $row['featureImg']; ?>" class="img-fluid" width="300px" height="500px" alt="image">
            <div class="deal-item bg-pink py-1 px-2">
                <p class="mb-0 white"><i class="fa fa-map-marker mr-2"></i> <?php echo $row['city']; ?> </p>
            </div>
        </div>
        <div class="trend-content-main">
            <div class="trend-content">
                <div class="rating-main d-flex align-items-center pb-1">
                    <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                    <span class="ml-2">38 Reviews</span>
                </div>
                <h4 class="bordernone pt-1"><a href="hotel-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['hotelName']; ?></a></h4>
                <p class="mb-2">
                    From: <span class="font-weight-bold pink">Rs.<?php echo $row['price'] ?>/-</span>/ Night
                </p>
 <style>
    .trend-para {
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2; 
      -webkit-box-orient: vertical;
    }
  </style>
                <div class="description-container">
                    <p class="mb-0 trend-para" id="description-<?php echo $row['id']; ?>"><?php echo $row['description']; ?></p>

                    <a href="hotel-booking.php?id=<?php echo $row['id']; ?>" class="btn nir-btn" >Book your Tour</a>
                    
                  
                   
            
                </div>
            </div>
        </div>
    </div>
</div>

                             <?php } ?>

                        </div>
                        </div>

                        <div class="text-center">
                            <a href="#" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">
                            <form class="form-content">
                                <h4 class="title white">Find The Places</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">Destination or Hotel Name</label>
                                            <div class="input-box">
                                                <i class="flaticon-placeholder"></i>
                                                <select class="niceSelect">
                                                    <option value="1">Where are you going?</option>
                                                    <option value="2">Argentina</option>
                                                    <option value="3">Belgium</option>
                                                    <option value="4">Canada</option>
                                                    <option value="5">Denmark</option>
                                                </select>
                                            </div>                            
                                        </div>
                                    </div>

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

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="white">Rooms and Guests</label>
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
                                <a href="#"><img src="images/map.jpg" alt="map" class="w-100"></a>
                            </div>
                            <div class="sidebar-item">
                                <h3>Price Range($)</h3>
                                <div class="range-slider">
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        <span class="min-value">0 $</span> 
                                        <span class="max-value">2000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <div class="detail-title">
                                    <h3>Meals</h3>
                                </div>
                                <div class="sidebar-content">
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" />
                                        <div class="state">
                                            <label>Breakfast Included (213)</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" checked />
                                        <div class="state">
                                            <label>All-inclusive (288)</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" checked />
                                        <div class="state">
                                            <label>Breakfast & dinner included (158)</label>
                                        </div>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse">
                                        <input type="checkbox" checked />
                                        <div class="state">
                                            <label>Kitchen facilities (120)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-item">
                                <h3>Facilities</h3>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Parking</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" checked />
                                    <div class="state">
                                        <label>Restaurant</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Pet Friendly</label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Room Services</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h3>Property Type</h3>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Hotels<span class="number">749</span></label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" checked />
                                    <div class="state">
                                        <label>Apartments<span class="number">630</span></label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Breakfast & Bed<span class="number">58</span></label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" />
                                    <div class="state">
                                        <label>Resorts<span class="number">29</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

   <?php
    include 'footer.php';
   ?>