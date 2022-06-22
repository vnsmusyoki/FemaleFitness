<?php $message = $workout_name = $workout_description = $workout_cost = ''; ?>
<?php include 'header.php' ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-12">
                <div class="card" style="padding:2rem 1rem;">
                    <h4 class="text-center mb-4">All Instructors</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Names</th>
                                    <th>Email Address</th>
                                    <th>Phone Number</th>
                                    <th>Location Address</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../db-connection.php';
                                $bookingplans = "SELECT * FROM `instructor`";
                                $querybookingsplans = mysqli_query($conn, $bookingplans);
                                $bookingsplansrows = mysqli_num_rows($querybookingsplans);
                                if ($bookingsplansrows >= 1) {
                                    while ($fetch  = mysqli_fetch_assoc($querybookingsplans)) {
                                        $inid = $fetch['instructor_id'];
                                        $name = $fetch['instructor_fullname'];
                                        $address = $fetch['instructor_address'];
                                        $mobile = $fetch['instructor_mobile'];
                                        $email = $fetch['instructor_email'];


                                        echo "
                                                    
                                                            <tr>
                                                                <td>$inid</td>
                                                                <td>$name</td>
                                                                <td>$email</td>
                                                                <td>$mobile</td>
                                                                <td>$address</td>
                                                                
                                                                 
                                                                
                                
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