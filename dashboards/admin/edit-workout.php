<?php $message = $workout_name = $workout_description = $workout_cost = ''; ?>
<?php
$bookingrec = $_GET['w'];
include '../../db-connection.php';
$bookings = "SELECT * FROM `workout` WHERE `workout_id` = '$bookingrec'";
$querybookings = mysqli_query($conn, $bookings);
$bookingsrows = mysqli_num_rows($querybookings);
if ($bookingsrows >= 1) {
    while ($fetch  = mysqli_fetch_assoc($querybookings)) {
        $wworkid = $fetch['workout_id'];
        $wname = $fetch['workout_name'];
        $wdescription = $fetch['workout_description'];
        $wcost = $fetch['workout_cost'];
    }
    global $wdescription;
    global $wcost;
    global $wworkid;
    global $wname;
}
?>
<?php include 'header.php' ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Work Out</h4>
                        <p class="card-description">
                            Provide the following details
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["edittworkout"])) {

                                require 'edit-workout-validate.php';
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">
                                <input type="hidden" name="workout_id" value="<?php echo $wworkid; ?>">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Work Out Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Work Out Name" name="workout_name"
                                            value="<?php echo $wname; ?>">
                                    </div>
                                </div>
                                <div class=" col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Work Out Cost</label>
                                        <input type="number" class="form-control" id="exampleInputEmail3"
                                            placeholder="E.G 250" name="workout_cost" value="<?php echo $wcost; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Work Out Description</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="5"
                                    name="workout_description"><?php echo $wdescription; ?></textarea>
                            </div>
                            <button type=" submit" class="btn btn-warning mr-2 text-light" name="edittworkout">Update
                                Work
                                Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ?? 2022.
                Premium <a href="??" target="_blank">Admin Dashboard</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Grafted By Grace <i
                    class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<?php include 'footer.php' ?>
</body>

</html>