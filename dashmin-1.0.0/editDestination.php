<?php
 include 'config.php';
 
$id = $_GET['id'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = $_POST['city'];
    $id = $_POST['id'];
    $sql="UPDATE `destintion` SET `dest` = '$destination' WHERE `destintion`.`id` = '$id'";
    mysqli_query($conn, $sql);
    header("location: addDestination.php");
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


                    <?php
                        $fetchSql = "select * from `destintion` where `id` = $id";
                        $result = mysqli_query($conn, $fetchSql);
                        while($row = mysqli_fetch_assoc($result)){
                    ?>


                    <form action="editDestination.php" method="post">
  <div class="mb-3">
    <input type="text" name="id" value="<?php echo $id; ?>" class="id_input" style="">
    <label for="city" class="form-label">City Name</label>
    <input type="text" name="city" value="<?php echo $row['dest']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Add Destination</button>
</form>

<?php }?>
</div>
</div>
</div>
    <!-- form end -->

    <!-- data table -->
    
    <!-- data table end -->

  



<?php 
    include 'footer.php';
?>
