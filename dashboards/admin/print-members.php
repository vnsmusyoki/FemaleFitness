<?php $message = $workout_name = $workout_description = $workout_cost = ''; ?>
<?php include 'header.php' ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12">
                <div class="card" style="padding:2rem 1rem;">
                    <h4 class="text-center mb-4">All Members</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Joined</th>
                                    <th>End</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../db-connection.php';
                                $bookingplans = "SELECT * FROM `member`";
                                $querybookingsplans = mysqli_query($conn, $bookingplans);
                                $bookingsplansrows = mysqli_num_rows($querybookingsplans);
                                if ($bookingsplansrows >= 1) {
                                    while ($fetch  = mysqli_fetch_assoc($querybookingsplans)) {
                                        $memberid = $fetch['member_id'];
                                        $name = $fetch['member_full_name'];
                                        $email = $fetch['member_email'];
                                        $mobile = $fetch['member_mobile'];
                                        $dob = $fetch['member_date_of_birth'];
                                        $gender = $fetch['member_gender'];
                                        $startdate = $fetch['member_joining_date'];
                                        $enddate = $fetch['member_end_date'];


                                        echo "
                                                    
                                                            <tr>
                                                                <td>$memberid</td>
                                                                <td>$name</td>
                                                                <td>$email</td>
                                                                <td>$mobile</td>
                                                                <td style='text-transform:uppercase;'>$dob</td>
                                                                <td>$gender</td>
                                                                <td>$startdate</td>
                                                                <td>$enddate</td>
                                                                 
                                                                
                                
                                </tr>";
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