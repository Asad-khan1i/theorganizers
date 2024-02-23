<?php
 include 'config.php';
 
 


 if($_SERVER["REQUEST_METHOD"] == "POST") {
     $destination = $_POST['destination'];
     $sql = "INSERT INTO `destintion` (`id`, `dest`) VALUES (NULL, '$destination')";
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

                    <form action="addDestination.php" method="post">
  <div class="mb-3">
    <label for="city" class="form-label">Destination Name</label>
    <input type="text" name="destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Add Destination</button>
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
                <th>Destination Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
    $counter = 0;
      $fetchSql = "SELECT * FROM `destintion`";
      $result = mysqli_query($conn, $fetchSql);
      while($row = mysqli_fetch_assoc($result)) {
        $counter++;
      ?>
            <tr>
                <td><?php echo $counter ?></td>
                <td><?php echo $row['dest']; ?></td>
                <td>
                <a href="editDestination.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a>
                </td>
                <td>
                <a href="Action.php?destination_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>
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
