<?php
include 'navheader.php';
include 'config.php';


?>


    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image: url(images/bg/booking-hotel.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hotel Booking</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hotel Booking</li>
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

                        <div class="description flight-book mb-4">
                            <div class="detail-title"><h3>YOUR PERSONAL INFORMATION</h3></div>
                            <div class="description-content">
                              <?php
                              include 'config.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fName = $conn->real_escape_string($_POST['fName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $arrivalDate = $conn->real_escape_string($_POST['arrivalDate']);
    $departureDate = $conn->real_escape_string($_POST['departureDate']);
    $noOfTicket = $conn->real_escape_string($_POST['noOfTicket']);
    $male = $conn->real_escape_string($_POST['male']);
    $female = $conn->real_escape_string($_POST['female']);
    $child = $conn->real_escape_string($_POST['child']);
    $message = $conn->real_escape_string($_POST['message']);
    $totalprice=$conn->real_escape_string($_POST['totalprice']);
    
    // SQL insertion query
    $sql = "INSERT INTO `hotelorder` (`id`, `fname`, `email`, `phone`, `departureDate`, `arrivalDate`, `noOfTicket`, `male`, `female`, `child`, `message`, `totalprice`)
     VALUES (NULL, '$fName', '$email', '$phone', '$departureDate', '$arrivalDate', '$noOfTicket', '$male', '$female', '$child', '$message', '$totalprice')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
 
    
}
?>



<form method="post">
    <div class="form-group">
        <label for="fName">Name:</label>
        <input type="text" class="form-control" id="fName" name="fName" placeholder="Enter full name">
    </div>
    
    <div class="row">
    <div class="form-group col-md-6">
        <label for="email1">Email:</label>
        <input type="text" class="form-control" id="email1" name="email" placeholder="abc@xyz.com">
    </div>
    <div class="form-group col-md-6">
        <label for="phnumber1">Phone Number:</label>
        <input type="text" class="form-control" id="phnumber1" name="phone" placeholder="XXXX-XXXXXX">
    </div>
    </div>

    <div class="row">
    <div class="form-group col-md-6">
        <label for="departure-date">Departure Date:</label>
        <input type="date" class="form-control" id="departureDate" name="departureDate">
    </div>
    <div class="form-group col-md-6">
        <label for="arrival-date">Arrival Date:</label>
        <input type="date" class="form-control" id="arrivalDate" name="arrivalDate">
    </div>

    </div>
    

    
    <div class="row">
    <div class="form-group col-md-3">
        <label for="ticketno">No of Person:</label>
        <input type="number" class="form-control" id="numberOfTravelers" name="noOfTicket" placeholder="Select a number">
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
    <div class="form-group textarea col-xs-12">
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Enter a message"></textarea>
    </div>
    <button class="nir-btn" type="submit"> confirm booking </button>
</form>

                            </div>    
                        </div>
                        <!-- <div class="description flight-book mb-4">
                            <div class="detail-title"><h3>YOUR CARD INFORMATION</h3></div>
                            <div class="description-content">
                                <form>
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" id="Name" placeholder="Enter fname in card">
                                    </div>
                                    <div class="form-group">
                                        <label>Card Number:</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Card Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Booking ID:</label>
                                        <input type="text" class="form-control" id="phnumber" placeholder="XXXXX">
                                    </div>
                                    <div class="form-group">
                                        <label>Expiry Date:</label>
                                        <input type="text" class="form-control" id="expiredate">
                                    </div>
                                    <div class="form-group">
                                        <label>Card Type:</label>
                                        <select>
                                            <option value="male">MasterCard</option>
                                            <option value="female">Paypal</option>
                                            <option value="other">Visa</option>
                                            <option value="other">Discover</option>
                                        </select>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse mb-2 d-flex align-items-center mr-0">
                                        <input type="checkbox"/>
                                        <div class="state p-warning-o">
                                            <label> I agree to the <a href="#">terms and conditions.</a></label>
                                        </div>

                                    </div>
                                </form>
                            </div>    
                        </div> -->
                        <!-- <div class="description detail-box car-book mb-4">
                            <div class="detail-title"><h3>Where should we send your confirmation?</h3></div>
                            <p>Please enter the email address where you would like to receive your confirmation.</p>
                            <div class="description-content">
                                <form>
                                    <div class="form-group mb-0">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" id="email-add" placeholder="abc@xyz.com">
                                    </div>
                                </form>
                            </div>    
                        </div> -->
                        <!-- <div class="description detail-box car-book mb-4">
                            <div class="detail-title">
                                <h3>Review and book your trip</h3>
                            </div>
                            <div class="alert alert-info p-3">
                                Attention! Please read important flight information!<br>
                                <p class="font-italic">• Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor dolor quis sapien rhoncus, a mollis felis hendrerit. Nam dapibus vitae justo in faucibus.</p>
                            </div>  
                            <form>
                                <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" value="Car"> By selecting to complete this booking I acknowledge that I have read and accept the <a href="#">rules & restrictions</a> <a href="#">terms & conditions</a> , and <a href="#">privacy policy.</a>
                                </div>
                            </form>          
                        </div> -->
                        

                        <!-- <div class="description detail-box mb-4">
                            <div class="booking-box">
                                <div class="booking-box-title d-md-flex align-items-center bg-pink p-4 mb-4">
                                    <i class="fa fa-check"></i>
                                    <div class="title-content ml-3">
                                        <h3 class="mb-0 white">Thank You. Your booking order is confirmed now.</h3>
                                        <p class="mb-0 white">A confirmation email has been sent to your provided email address.</p>
                                    </div>
                                </div>
                                <div class="travellers-info mb-2">
                                    <h4>Traveler Information</h4>
                                    <table>
                                        <tr>
                                            <td>Booking Number</td>
                                            <td>5784-BD245</td>
                                        </tr>
                                        <tr>
                                            <td>First Name</td>
                                            <td>Jessica</td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td>Brown</td>
                                        </tr>
                                        <tr>
                                            <td>Email Address</td>
                                            <td>info#jessica.com</td>
                                        </tr>
                                        <tr>
                                            <td>Street Address and number</td>
                                            <td>353 Third floor Avenue</td>
                                        </tr>
                                        <tr>
                                            <td>Town/City</td>
                                            <td>Paris</td>
                                        </tr>
                                        <tr>
                                            <td>ZIP Code</td>
                                            <td>75800-875</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>France</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="booking-border mb-2 bg-lgrey p-4">
                                    <h4 class="border-b pb-2 mb-2">Payment</h4>
                                    <p>This is the third time I've used Travelo Website and telling you the truth their services are always reliable and it ony takes few minutes to plan and finalize.</p>
                                    <a href="#">Payment is made by Credit Card via Paypal</a>
                                </div>
                                <div class="booking-border mb-2 bg-lgrey p-4">
                                    <h4 class="border-b pb-2 mb-2">View Booking Details</h4>
                                    <p>This is the third time I've used Travelo Website and telling you the truth their services are always reliable and it ony takes few minutes to plan and finalize.</p>
                                    <a href="#">https://www.travel.com/booking-details</a>
                                </div>
                                <div class="booking-border d-flex">
                                    <a href="#" class="nir-btn mr-4"><i class="fa fa-print"></i> Print</a>
                                    <a href="#" class="nir-btn-black"><i class="fa fa-envelope-open-text"></i> Send To</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">
                <?php
                       $id=$_GET['id'];
                        $sql = "SELECT * FROM `hotel` WHERE `id` = '$id' ";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                    ?>
                            <div class="trend-item mb-0">
                                <div class="trend-image">
                                    <img src="dashmin-1.0.0/img/userImages/<?php echo $row['featureImg']; ?>" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h4 class="mb-1 p-0 bordernone"><a href="#" class="" tabindex="0"><?php echo $row['hotelName'] ?></a></h4>
                                        <p class="mb-0"><i class="fa fa-map-marker mr-2 grey"></i><?php echo $row['city'] ?> </p>
                                    
                                    </div>
                                </div>
                            </div>
                            

                        </div>
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
                <!-- <tr>
                    <td>Number of Travelers</td>

                    <td class="pink" id="numberOfTravelersCell">0</td>
                </tr> -->
                <tr>
                    <td>Total Price</td>
                    <td class="pink" id="totalPrice"><input type="hidden" name="totalprice"></td>
                    
                     <!-- This will be dynamically calculated -->
                </tr>
            </tbody>
        </table>
    </div>
</div>
                   
    </section>
    <!-- blog Ends -->  

    

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





    <?php
       // Close connection
       $conn->close();
    // include 'footer.php';
    ?>