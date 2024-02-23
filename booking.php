<?php

    include 'navheader.php';
    include 'config.php';

    $id = $_GET['id'];
?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Booking</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  

    <!-- blog starts -->
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="payment-book">
                        <div class="booking-box">
                            <div class="customer-information mb-2">
        
                            <h3 class="border-b pb-2 mb-2">Traveller Information</h3>

                            <?php
                                // Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve form data
    $totalperson = $conn->real_escape_string($_POST['totalperson']);
    $male = $conn->real_escape_string($_POST['male']);
    $female = $conn->real_escape_string($_POST['female']);
    $child = $conn->real_escape_string($_POST['child']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $country = $conn->real_escape_string($_POST['country']);
    $province = $conn->real_escape_string($_POST['province']);
    $city = $conn->real_escape_string($_POST['city']);
    $address = $conn->real_escape_string($_POST['address']);
    
    // SQL insertion query
    $sql = "INSERT INTO `tourorder` (`totalperson`, `male`, `female`, `child`, `email`, `phone`, `country`, `province`, `city`, `address`) 
            VALUES ('$totalperson', '$male', '$female', '$child', '$email', '$phone', '$country', '$province', '$city', '$address')";
    
    // Execute the query
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>
<form method="post">
    <div class="row">
    <div class="col-md-3" >
        <label for="totalperson">Total Person:</label>
        <input type="number" name="totalperson" id="numberOfTravelers" value="1" min="1">
    </div>
    <div class="col-md-3">
        <label for="male">Male:</label>
        <input type="number" id="male" name="male" placeholder="Male">
    </div>
    <div class="col-md-3">
        <label for="female">Female:</label>
        <input type="number" id="female" name="female" placeholder="Female">
    </div>
    
    <div class="col-md-3">
        <label for="child">Child:</label>
        <input type="number" id="child" name="child" placeholder="Child">
    </div>
</div>

<div class="row">

   <div class="col-md-6" >
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email Address" required>
    </div>
    <div class="col-md-6" >
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Phone No." required>
    </div>
</div>

<div class="row">
<div class="col-md-4" >
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" placeholder="Country" required>
    </div>
    <div class="col-md-4" >
        <label for="province">Province:</label>
        <input type="text" id="province" name="province" placeholder="Province" required>
    </div>
    <div class="col-md-4">
        <label for="city">City/Town:</label>
        <input type="text" id="city" name="city" placeholder="City/Town" required>
    </div>
</div>

    
    <div>
        <label for="address">Address Line:</label>
        <textarea id="address" name="address" cols="30" rows="5"></textarea>
    </div>
    <div>
        <input type="submit" class="nir-btn"  value="Book now">
    </div>
</form>


                                
                               
                            </div>
                            <!-- <div class="customer-information card-information">
                                <h3 class="border-b pb-2 mb-2">Payment Information <small class="font-sm text-muted">/ <i class="fas fa-lock"></i> secure</small></h3>
                                <div class="alert bg-pink p-4 mb-4" role="alert">
                                    <h3 class="white mb-1">Congratulations!!!</h3>
                                    <p class="lead white mb-1">You've got the best price at just <strong class="font-weight-bold">$60.55</strong> per person</p>
                                    <p class="mb-0 white">Prices may go up, so secure your reservation today. </p>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="mb-2">Credit Card</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Card Holder Number</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Card Number</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Expiry Month</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Expiry Year</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>CVC</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-t pt-2 mt-1"></div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <h5 class="mb-2">Paypal</h5>
                                        </div>
                                        <div class="col-md-12">
                                            <p>To make the payment process secure and complete you will be redirected to Paypal Website .</p>
                                            <a href="" class="pink">Checkout via Paypal <i class="fa fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="checkbox"> By continuing, you agree to the <a href="#">Terms and Conditions.</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-btn">
                                                <a href="#" class="nir-btn">CONFIRM BOOKING</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky sticky1">

                    <?php
                      
                    
                        // SQL query to select data from the database
                        $sql = "SELECT * FROM `tour` WHERE `id` = '$id' ";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="trend-item mb-4">
                        <div class="trend-image">
                            <img src="dashmin-1.0.0/img/userImages/<?php echo $row['featureImg']; ?>" alt="image">
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
                                    <span class="ml-2"> Reviews</span>
                                </div>
                                <h4><a href="#"><?php echo $row['tourname']; ?></a></h4>
                                <p class="mb-0 pink"><i class="fa fa-eye mr-1"></i>  Visiting Places <i class="fa fa-map-marker mr-1 ml-3"></i> <?php echo $row['city']; ?>.</p>
                            </div>
                            <div class="trend-last-main">
                                <p class="mb-0 trend-para"><?php echo $row['description']; ?></p>
                                <div class="trend-last d-flex align-items-center justify-content-between bg-navy">
                                    <p class="mb-0 white"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['duration']; ?></p>
                                    <div class="trend-price">
                                        <p class="price white mb-0">From <span><?php echo $row['price']; ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                        <!-- <div class="list-sidebar">
                            <div class="sidebar-item">
                                <h4>Payment</h4>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Price</td>
                                            <td class="pink">$580.00</td>
                                        </tr>
                                        <tr>
                                            <td>Number of Travellers</td>
                                            <td class="pink">1</td>
                                        </tr>
                                        <tr>
                                            <td>Infant Price</td>
                                            <td class="pink">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Subtotal</td>
                                            <td class="pink">$580.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td class="pink">$580.00</td>
                                        </tr>
                                        <tr>
                                            <td>Tax & fee</td>
                                            <td class="pink">0</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="bg-pink">
                                        <tr>
                                            <th class="font-weight-bold white">Amount</th>
                                            <th class="font-weight-bold white">$580.00</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div> -->

                        <div class="list-sidebar">
    <div class="sidebar-item">
        <h4>Payment</h4>
        <table id="paymentTable">
            <tbody>
                <tr>
                    <td>Price per Traveler</td>
                    <td class="pink"><?php echo $row['price']; ?> </td>
                </tr>
                <?php
                            }
                        } else {
                            echo "0 results";
                        }
                       
                    ?>
                <tr>
                    <td>Number of Travelers</td>

                    <td class="pink"><input type="number" id="numberOfTravelers" value="1" min="1"></td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td class="pink" id="totalPrice"><input type="hidden" name="totalprice" id=""></td>
                    <input type="hidden" name="totalprice" id="">
                     <!-- This will be dynamically calculated -->
                </tr>
            </tbody>
        </table>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Get the elements
    var pricePerTravelerElement = document.querySelector('#paymentTable tbody tr:nth-child(1) td:nth-child(2)');
    var numberOfTravelersElement = document.querySelector('#numberOfTravelers');
    var totalPriceElement = document.querySelector('#totalPrice');

    // Initial total price calculation
    var pricePerTraveler = parseFloat(pricePerTravelerElement.textContent.replace('₨', '').trim());
    var numberOfTravelers = parseInt(numberOfTravelersElement.value);
    var totalPrice = pricePerTraveler * numberOfTravelers;
    totalPriceElement.textContent = totalPrice.toFixed(2); // Update the total price

    // Function to update total price when the number of travelers changes
    function updateTotalPrice() {
        var numberOfTravelers = parseInt(numberOfTravelersElement.value);
        var totalPrice = pricePerTraveler * numberOfTravelers;
        totalPriceElement.textContent = totalPrice.toFixed(2); // Update the total price
    }

    // Example: Update total price when the number of travelers changes (you can use your own event listener)
    numberOfTravelersElement.addEventListener('input', updateTotalPrice);
</script>



    <!-- blog Ends -->  
    


  