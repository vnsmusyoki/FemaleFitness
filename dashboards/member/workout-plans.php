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
                                    <th>Work Out Name</th>
                                    <th>Work Out Cost</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../../db-connection.php';
                                $bookings = "SELECT * FROM `workout`";
                                $querybookings = mysqli_query($conn, $bookings);
                                $bookingsrows = mysqli_num_rows($querybookings);
                                if ($bookingsrows >= 1) {
                                    while ($fetch  = mysqli_fetch_assoc($querybookings)) {
                                        $workid = $fetch['workout_id'];
                                        $name = $fetch['workout_name'];
                                        $description = $fetch['workout_description'];
                                        $cost = $fetch['workout_cost'];

                                        echo "
                                                    
                                                            <tr>
                                                                <td>$workid</td>
                                                                <td>$name</td>
                                                                <td>Ksh. $cost</td>
                                                                <td>$description</td> 
                                                               
                                                                <td>
                                                                    <a href='book-workout.php?w=$workid' class='btn btn-success btn-sm'>Book Now</a> 
                                                                </td>
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
                <a href="£" target="_blank">Member Dashboard</span>
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