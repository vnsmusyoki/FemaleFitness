<?php $full_name = $username = $phone_number = $email = $location_address = $message = ''; ?>

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

                                require 'add-instructor-validate.php';
                            }
                            ?>
                            <?php echo $message; ?>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" id="exampleInputEmail1"
                                            placeholder="Instructor Full Name" name="full_name">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Username" name="username">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="07*********" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Email@example.com" name="email">
                                    </div>
                                </div>
                            </div>




                            <div class="form-group">
                                <textarea class="form-control form-control-lg" id="exampleInputPassword1" cols="3"
                                    rows="4" placeholder="Instruction Location Address"
                                    name="location_address"></textarea>
                            </div>

                            <div class="mt-3">
                                <button type="submit" name="createaccount"
                                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                    Instructor Account Sign Up</button>
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