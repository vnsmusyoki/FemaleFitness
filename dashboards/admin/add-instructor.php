<?php $full_name = $username = $phone_number = $password = $confirmpassword = $email = $location_address = $message = ''; ?>

<?php include 'header.php' ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Member</h4>
                        <p class="card-description">
                            Provide the following details
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["createaccount"])) {

                                require 'add-member-validate.php';
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                            placeholder="Member Full Name" name="full_name">
                                        <small class="text-muted form-text">Write Full Name</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Username" name="username">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="07*********" name="phone_number">
                                        <small class="text-muted form-text">Valid Phone Number</small>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Email@example.com" name="email">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Email@example.com"
                                            name="date_of_birth">
                                        <small class="text-muted form-text">Date of Birth</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <select class="form-control form-control-lg" id="exampleInputPassword1" cols="3"
                                            rows="4" placeholder="Instruction Location Address" name="gender">
                                            <option value="">Click to Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <small class="text-muted form-text">Select Gender</small>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Password" name="password" readonly>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Confirm Password"
                                            name="confirmpassword" readonly>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Confirm Password" name="start_date">
                                        <small class="text-muted form-text">Start Date</small>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Confirm Password" name="end_date">
                                        <small class="text-muted form-text">End Date</small>
                                    </div>
                                </div>
                            </div>



                            <div class="mt-3">
                                <button type="submit" name="createaccount"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    Member Account Sign Up
                                </button>
                            </div>
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