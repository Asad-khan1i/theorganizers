
<?php

    include 'config.php';

    
?>


<?php


            include 'sidebar.php';
            include 'navbar.php';
        ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <form action="insertAction.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Room Type</label>
      <select class="form-select" name="type" aria-label="Default select example">
    <option selected>Choose Category</option>
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
    <label class="form-label" for="form6Example1">services</label>
    <ul id="todo-list">
</ul>
<button type="button" id="addButton" onclick="addTaskField()">+ Add</button>

    </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Image</label>
        <input type="file" name="image" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Price</label>
        <input type="text"  name="price" id="form6Example2" class="form-control" Multiple/>
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Hotel</label>
      
        <select name="hotelName"  class="form-select">

        <?php 
            $sql = "select * from `hotel`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>
          
          <option value="<?php echo $row['id']; ?>"><?php echo $row['hotelName']; ?></option>

        <?php }  ?>
        </select>
        
      </div>
    </div>
  </div>
  
  
  
  
      <button type="submit" name="enterRoom" class="btn btn-primary my-2">Add Hotel</button>
</form>

</div>
</div>
</div>
    <!-- form end -->

    <!-- datatable -->

    <div class="container-fluid pt-4 px-4 dataTable">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Room Type</th>
                <th>Services</th>
                <th>image</th>
                <th>price</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
        <?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `room`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      
        
    
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['type']; ?></td>
                <td><?php echo $row['services']; ?></td>
                <td>
                  <img src="img/userImages/<?php echo $row['image']; ?>" class="img-fluid" alt="" height="100px" width="100px">
                </td>
                <td><?php echo $row['price']; ?></td>
               

                
               
                <td>
                <a href="editRoom.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a> /
                <a href="Action.php?room_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
                
                
              
            </tr>
           <?php } ?>
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            

    <!-- datatable end -->



<?php 
    include 'footer.php';
?>
