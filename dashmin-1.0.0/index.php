
        <?php
         session_start();
         if(!isset($_SESSION['loggedin'])) {
             header("location: signin.php");
         }
            include 'sidebar.php';
            include 'config.php'
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        
            <!-- Navbar Start -->
           <?php
            include 'navbar.php';

           
           ?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- data table Start -->
    <div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12 col-md-12">
           <h2>Tour Orders</h2>
           <br>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                      
                        <th>Total person</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Child</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Province</th>
                        <th>City/Town</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $sql = "SELECT * FROM `tourorder`";
                     $result = mysqli_query($conn, $sql);
                     while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $row['totalperson']; ?></td>
                        <td><?php echo $row['male']; ?></td>
                        <td><?php echo $row['female']; ?></td>
                        <td><?php echo $row['child']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['province']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><a href="Action.php?tourorder_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                            }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End data table -->
<br><br>

<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12 col-md-12">
           <h2>Hotel Orders</h2>
           <br>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                      
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Departure Date</th>
                        <th>Arrival Date</th>
                        <th>No of persons</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Child</th>
                        <th>message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $sql = "SELECT * FROM `hotelorder`";
                     $result = mysqli_query($conn, $sql);
                     while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['departureDate']; ?></td>
                        <td><?php echo $row['arrivalDate']; ?></td>
                        <td><?php echo $row['noOfTicket']; ?></td>
                        <td><?php echo $row['male']; ?></td>
                        <td><?php echo $row['female']; ?></td>
                        <td><?php echo $row['child']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><a href="Action.php?hotelorder_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a></td>  
                    </tr>
                    <?php
                            }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End data table -->
<?php
    // Close database connection
    mysqli_close($conn);
?>
            
            
            <!-- data table End -->


            

            <!-- Footer Start -->
           <?php 
           include 'footer.php';
           ?>
            <!-- Footer End -->
        