<?php $message = $wef = $wet = $ref = $transaction_code = ''; ?>

<?php include 'header.php' ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Password</h4>
                        <p class="card-description">
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["edittworkout"])) {


                                $password = mysqli_real_escape_string($conn, $_POST['password']);
                                $cpassword = mysqli_real_escape_string($conn, $_POST['confirm_password']);
                                
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputName1"
                                            placeholder="****" name="password" value="">
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Confirm Password</label>
                                        <input type="password" class="form-control" id="exampleInputEmail3"
                                            placeholder="*******" name="confirm_password" value="">
                                    </div>
                                </div>
                            </div>

                            <button type=" submit" class="btn btn-primary mr-2 text-light" name="edittworkout">
                                Update Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Email Address</h4>
                        <p class="card-description">
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["edittworkout"])) {

                                require 'book-workout-validate.php';
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">

                                <div class=" col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Email Address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3"
                                            placeholder="example@gmail.com" name="email" value="">
                                    </div>
                                </div>
                            </div>

                            <button type=" submit" class="btn btn-primary mr-2 text-light" name="edittworkout">
                                Update Email Address
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Username</h4>
                        <p class="card-description">
                        </p>
                        <form class="forms-sample" action="" method="POST">
                            <?php

                            if (isset($_POST["edittworkout"])) {

                                require 'book-workout-validate.php';
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">

                                <div class=" col-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Username</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3"
                                            placeholder="username" name="email" value="">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2 text-light" name="edittworkout">
                                Update Username
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