
<?php

    include 'config.php';

    $id  = $_GET['id'];

    
?>


<?php


            include 'sidebar.php';
            include 'navbar.php';
        ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <form action="editAction.php" method="post" enctype="multipart/form-data">
                      <?php 
                        $sql = "select * from `room` where `id` = $id";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                      ?>

                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="id" value="<?php echo $id; ?>" style="display:none;">
      <label class="form-label" for="form6Example1">Type</label>
      <select class="form-select" name="type" aria-label="Default select example">
    <option selected>choose category</option>
    <?php
                $sql = "SELECT * FROM `hotelcategory`";
                $result = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                ?>
  <option value="<?php echo $row['id']; ?>"><?php echo $row['hcategory']; ?></option>
 <?php } ?>
</select>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Services</label>
        <input type="text" value="<?php echo $row['services']; ?>" name="services" id="form6Example2" class="form-control" />
      </div>
    </div>
  </div>
   <div class="row mb-4">
    <div class="col">
      <h3>Image</h3>
     <img src="img/userImages/<?php echo $row['image']; ?>" class="img-fluid" alt="img" height="100px" width="100px"> 
     <input type="file" name="image">
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Price</label>
        <input type="text" value="<?php echo $row['price']; ?>" name="price" id="form6Example1" class="form-control" />
        
      </div>
    </div>
  </div>


  
  
      <button type="submit" name="updateRoom" class="btn btn-primary my-2">Update Room</button>
<?php } ?>
    </form>

</div>
</div>
</div>
    <!-- form end -->


<?php 
    include 'footer.php';
?>
