<?php $message = $wef = $wet = $ref = $transaction_code = ''; ?>
<?php
$bookingrec = $_GET['w'];
include '../../db-connection.php';
$bookingplans = "SELECT * FROM `member_workout_plan` WHERE `plan_id` = '$bookingrec'";
$querybookingsplans = mysqli_query($conn, $bookingplans);
$bookingsplansrows = mysqli_num_rows($querybookingsplans);
if ($bookingsplansrows >= 1) {
    while ($fetch  = mysqli_fetch_assoc($querybookingsplans)) {
        $planid = $fetch['plan_id'];
        $wef = $fetch['plan_wef'];
        $wet = $fetch['plan_wet'];
        $ref = $fetch['plan_ref'];
        $workoutid = $fetch['plan_workout_id'];
        $instructorid = $fetch['plan_assigned_instructor_id'];
        global $planid;
        global $wef;
        global $wet;
        global $ref;

        $bookings = "SELECT * FROM `workout` WHERE `workout_id` = '$workoutid'";
        $querybookings = mysqli_query($conn, $bookings);
        $bookingsrows = mysqli_num_rows($querybookings);
        if ($bookingsrows >= 1) {
            while ($fetch  = mysqli_fetch_assoc($querybookings)) {
                $workname = $fetch['workout_name'];
                $workdesc = $fetch['workout_description'];
                $workcost = $fetch['workout_cost'];

                global $workcost;
                global $workdesc;
                global $workname;
            }
        }
        if ($instructorid == null) {
            $instructorname = "pending";
            $phonenumber = "pending";
        } else {
            $instructor = "SELECT * FROM `instructor` WHERE `instructor_id` = '$instructorid'";
            $querybookings = mysqli_query($conn, $instructor);
            $bookingsrows = mysqli_num_rows($querybookings);
            if ($bookingsrows >= 1) {
                while ($fetch  = mysqli_fetch_assoc($querybookings)) {
                    $instructorname = $fetch['instructor_fullname'];
                    $phonenumber = $fetch['instructor_mobile'];
                }
            }
        }
        $instructor = "SELECT * FROM `payments` WHERE `payments_plan_id` = '$planid'";
        $querypayments = mysqli_query($conn, $instructor);
        $bookingsrows = mysqli_num_rows($querypayments);
        if ($bookingsrows >= 1) {
            while ($fetch  = mysqli_fetch_assoc($querypayments)) {
                $paytcode = $fetch['payment_transaction_code'];
                $paytmode = $fetch['payment_mode'];
                global $paytcode;
                global $paytmode;
            }
        }
    }
}
?>
<?php include 'header.php' ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Assign Instructor</h4>
                        <p class="card-description">
                            Provide the following details
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["editinstructor"])) {

                                $instructor = mysqli_real_escape_string($conn, $_POST['instructor']);

                                if (empty($instructor)) {
                                    $message = "
                                        <script>
                                            toastr.error('Please Select the instructor');
                                        </script>
                                    ";
                                } else {
                                    $bookingrec = $_GET['w'];
                                    $update = "UPDATE `member_workout_plan` SET `plan_assigned_instructor_id` = '$instructor' WHERE `plan_id` = '$bookingrec'";
                                    $queryupdate = mysqli_query($conn, $update);
                                    if ($queryupdate) {
                                        $message = "
                                        <script>
                                            toastr.success('Instructor  has been updated successfully');
                                        </script>
                                        
                                    ";

      echo "<script>window.location.replace('dashboard.php');</script>";
                                    }
                                }
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">
                                <input type="hidden" name="workout_id" value="<?php echo $wworkid; ?>">
                                <input type="hidden" name="workout_cost" value="<?php echo $wcost; ?>">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Work Out Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1"
                                            placeholder="Work Out Name" name="workout_name" readonly
                                            value="<?php echo $workname; ?>">
                                    </div>
                                </div>
                                <div class=" col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Work Out Cost</label>
                                        <input type="number" class="form-control" id="exampleInputEmail3" readonly
                                            placeholder="E.G 250" name="workout_costs" value="<?php echo $workcost; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Work Out Description</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="5" name="workout_description"
                                    readonly><?php echo $workdesc; ?></textarea>
                            </div>
                            <div class="row">
                                <input type="hidden" name="workout_id" value="<?php echo $wworkid; ?>">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">With Effect From </label>
                                        <input type="date" class="form-control" id="exampleInputName1"
                                            placeholder="Work Out Name" name="wef" value="<?php echo $wef; ?>" readonly>
                                    </div>
                                </div>
                                <div class=" col-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">With Effect To</label>
                                        <input type="date" class="form-control" id="exampleInputEmail3"
                                            placeholder="E.G 250" name="wet" value="<?php echo $wet; ?>" readonly>
                                    </div>
                                </div>
                                <div class=" col-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Booking Reference</label>
                                        <input type="text" class="form-control" id="exampleInputEmail3"
                                            placeholder="Write something" name=" ref" value="<?php echo $ref; ?>"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="workout_id" value="<?php echo $wworkid; ?>">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Payment Method </label>
                                        <select class="form-control" id="exampleInputName1" placeholder="Work Out Name"
                                            name="payment_method" value="<?php echo $paytmode; ?>" readonly>
                                            <option value=""><?php echo $paytmode; ?></option>

                                        </select>
                                    </div>
                                </div>
                                <div class=" col-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Transaction Code</label>
                                        <input type="text" class="form-control" id="exampleInputEmail3"
                                            placeholder="Transaction Code" name="transaction_code"
                                            value="<?php echo $paytcode; ?>" style="text-transform:uppercase;" readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Assign Instructor</label>
                                        <select class="form-control" id="exampleInputName1" placeholder="Work Out Name"
                                            name="instructor" value="<?php echo $paytmode; ?>">
                                            <option value="">Select option</option>
                                            <?php
                                            include '../../db-connection.php';
                                            $bookingplans = "SELECT * FROM `instructor`";
                                            $querybookingsplans = mysqli_query($conn, $bookingplans);
                                            $bookingsplansrows = mysqli_num_rows($querybookingsplans);
                                            if ($bookingsplansrows >= 1) {
                                                while ($fetch  = mysqli_fetch_assoc($querybookingsplans)) {
                                                    $instructorid = $fetch['instructor_id'];
                                                    $fullname = $fetch['instructor_fullname'];
                                                    $mobile = $fetch['instructor_mobile'];
                                                    echo "<option value='$instructorid'>$fullname - $mobile</option>";
                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type=" submit" class="btn btn-warning mr-2 text-light" name="editinstructor">Book
                                Workout Plan
                            </button>
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022.
                Premium <a href="£" target="_blank">Admin Dashboard</span>
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