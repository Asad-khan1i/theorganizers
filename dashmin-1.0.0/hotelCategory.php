<?php
 include 'config.php';
 
 


 if($_SERVER["REQUEST_METHOD"] == "POST") {
     $hcategory = $_POST['hcategory'];
     $sql = "INSERT INTO `hotelcategory` (`id`, `hcategory`) VALUES (NULL, '$hcategory')";
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

                    <form action="hotelCategory.php" method="post">
  <div class="mb-3">
    <label for="city" class="form-label">Category Name</label>
    <input type="text" name="hcategory" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Add Category</button>
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
      $fetchSql = "SELECT * FROM `hotelcategory`";
      $result = mysqli_query($conn, $fetchSql);
      while($row = mysqli_fetch_assoc($result)) {
        $counter++;
      ?>
            <tr>
                <td><?php echo $counter ?></td>
                <td><?php echo $row['hcategory']; ?></td>
                <td>
                <a href="edithCategory.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a>
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
