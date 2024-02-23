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
      <label class="form-label" for="form6Example1">Tour Name</label>
        <input type="text" name="tourName" id="form6Example1" class="form-control" required />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2"  >City</label >
        <select name="city"  class="form-select">
        <?php 
            $sql = "select * from `city`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>
          
          <option value="<?php echo $row['city']; ?>"  ><?php echo $row['city']; ?>
        </option>

        <?php }  ?>
        </select>
      </div>
    </div>
  </div>
  <div class="row mb-4">
  <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">map</label>
        <input type="text" name="map" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
    <div class="form-outline">
      <label class="form-label" for="form6Example1">Price </label>
        <input type="text" name="price" id="form6Example1" class="form-control" required />
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Feature Image</label>
        <input type="file" name="featureImg" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Images</label>
        <input type="file"  name="images[]" id="form6Example2" class="form-control" Multiple required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Duration days</label>
        <input type="text" name="day" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">persons</label>
        <input type="text"  name="person" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Min Age</label>
        <input type="text" name="age" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">PickUp Point</label>
        <input type="text"  name="pickupPoint" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Departure location</label>
        <input type="text" name="departureLocation" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">sharing room </label>
        <input type="text"  name="room" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Departure Time</label>
        <input type="time" name="departureTime" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Arrival Time</label>
        <input type="time"  name="arrivalTime" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Languages</label>
        <input type="text" name="language" multiple id="form6Example1" class="form-control" />
        
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
      <label class="form-label" for="form6Example1">From </label>
        <input type="date" name="departureDate"  id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">To</label>
        <input type="date"  name="arrivalDate" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>
  

  <div class="form-outline">
      <label class="form-label" for="form6Example2">duration</label>
        <input type="text" name="duration" id="form6Example2" class="form-control" required />
        
      </div>
  
  <div class="form-outline">
      <label class="form-label" for="wordTextarea">Description</label>
        <textarea id="textarea" name="desc" class="form-control"></textarea>
      
        
      </div>
      <button type="submit" name="entertour" class="btn btn-primary my-2">Add Tour</button>
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
                <th>Hotel Name</th>
                <th>city</th>
                <th>Duration</th>
                <th>image</th>
                <th>price</th>
                
                <th>Description</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
        <?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `tour`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      
        
    
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['tourname']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['duration']; ?></td>
                <td>
                  <img src="img/userImages/<?php echo $row['featureImg']; ?>" alt="" height="100px" width="100px">
                </td>
                <td><?php echo $row['price']; ?></td>
                <td><?php 
                   if (strlen($row['description']) > 50){
                     echo $str = substr($row['description'], 0, 7) . '...';
                  } else {
                    echo $row['description'];
                  }
                ?></td>
                <td>
                <a href="editHotel.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a> /
                <a href="Action.php?tour_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
                
                
              
            </tr>
           <?php } ?>
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            

    <!-- datatable end -->

  

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>

<?php 
    include 'footer.php';
?>
