<?php $message = $workout_name = $workout_description = $workout_cost = ''; ?>
<?php include 'header.php' ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12">
                <div class="card" style="padding:2rem 1rem;">
                    <h4 class="text-center mb-4">All Work Out Plans</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Plan Booked</th>
                                    <th>Description</th>
                                    <th>Amount Paid</th>
                                    <th>Transaction Code</th>
                                    <th>WEF</th>
                                    <th>WET</th>
                                    <th>Instructor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../db-connection.php';
                                $bookingplans = "SELECT * FROM `member_workout_plan` WHERE `plan_member_id`='$memberid'";
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

                                        $bookings = "SELECT * FROM `workout` WHERE `workout_id` = '$workoutid'";
                                        $querybookings = mysqli_query($conn, $bookings);
                                        $bookingsrows = mysqli_num_rows($querybookings);
                                        if ($bookingsrows >= 1) {
                                            while ($fetch  = mysqli_fetch_assoc($querybookings)) {
                                                $workname = $fetch['workout_name'];
                                                $workdesc = $fetch['workout_description'];
                                                $workcost = $fetch['workout_cost'];
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
                                            }
                                        }

                                        echo "
                                                    
                                                            <tr>
                                                                <td>$planid</td>
                                                                <td>$workname</td>
                                                                <td>$workdesc</td>
                                                                <td>Ksh. $workcost</td>
                                                                <td style='text-transform:uppercase;'>$paytcode</td>
                                                                <td>$wef</td>
                                                                <td>$wet</td>
                                                                <td>$instructorname, $phonenumber</td>  
                                                                
                                                               
                                                                
                                                                    </tr>
                                                        ";
                                    }
                                }

                                ?>

                            </tbody>
                        </table>
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
                <a href="" target="_blank">Member Dashboard</span>
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