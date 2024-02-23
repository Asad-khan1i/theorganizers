<?php
 include 'config.php';
 
 


 if($_SERVER["REQUEST_METHOD"] == "POST") {
     $city = $_POST['city'];
     $sql = "INSERT INTO `city` (`id`, `city`) VALUES (NULL, '$city')";
     mysqli_query($conn, $sql);
 }
?>



<?php
            include 'sidebar.php';
            include 'navbar.php';
        ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">

                    <form action="addCity.php" method="post">
  <div class="mb-3">
    <label for="city" class="form-label">City Name</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Add City</button>
</form>

</div>
</div>
</div>
    <!-- form end -->

    <!-- datatable -->

    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>City Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
    $counter = 0;
      $fetchSql = "SELECT * FROM `city`";
      $result = mysqli_query($conn, $fetchSql);
      while($row = mysqli_fetch_assoc($result)) {
        $counter++;
      ?>
            <tr>
                <td><?php echo $counter ?></td>
                <td><?php echo $row['city']; ?></td>
                <td>
                <a href="editCity.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a>
                </td>
                <td>
                <a href="action.php?city_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>
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
