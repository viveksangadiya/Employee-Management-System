<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Employee</title>

    <!-- Custom fonts for this template-->
    <link href="./../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include("./../include/sidebar.php") ?>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("./../include/navbar.php") ?>
            </div>

            <!-- Form Start  -->

            <div class="container " id="content">
                <div class="row  justify-content-center py-5">
                    <div class="col-12">
                        <form class="card p-5" action="./insertEmployeeData.php" method="post">
                            <h2 class="text-center py-3">Add User Form</h2>
                            <!-- Name Input Start -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="userFirstName" class="form-label">First Name</label>
                                    <input type="text" name="fname" class=" form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="userLastName" class="form-label">Last Name</label>
                                    <input type="text" name="lname" class="form-control">
                                </div>
                            </div>
                            <!-- Name Input End -->

                            <div class="row">
                                <!-- Email Input Start -->
                                <div class="col-md-6 mb-3">
                                    <label for="userEmail" class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <!-- Email Input End -->

                                <!-- Password Input Start -->
                                <div class="col-md-6 mb-3">
                                    <label for="userPassword" class="form-label">Password</label>
                                    <input type="password" name="password" required class="form-control">
                                </div>
                                <!-- Password Input End -->
                            </div>

                            <div class="row">
                                <!-- Mobile Input Start -->
                                <div class="col-md-6 mb-3">
                                    <label for="userMobile" class="form-label">Mobile </label>
                                    <input type="text" required name="mobile" class="form-control">
                                </div>
                                <!-- Mobile Input End -->

                                <!-- Age Input Start -->
                                <div class="col-md-6 mb-3">
                                    <label for="userAge" class="form-label">Age </label>
                                    <input type="text" required name="age" class="form-control">
                                </div>
                                <!-- Age Input End -->
                            </div>

                            <div class="row">
                                <!-- department input start -->
                                <div class="col-md-6 mb-4">
                                    <label for="userDepartment" class="form-label">Department </label>
                                    <input type="text" name="department" required class="form-control">
                                </div>
                                <!-- department input end -->
                                <!-- state input start -->
                                <div class="col-md-6 mb-4">
                                    <label for="userState" class="form-label">State</label>
                                    <input type="text" name="state" required class="form-control" id="userState">
                                </div>
                                <!-- state input end -->
                            </div>


                            <button type="submit" class="btn btn-primary" name="sbmt">Add User</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Form End -->

        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="./../vendor/jquery/jquery.min.js"></script>
        <script src="./../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="./../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./../js/sb-admin-2.min.js"></script>
</body>

</html>