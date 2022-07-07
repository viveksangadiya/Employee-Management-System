<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assign Project</title>

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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div>
                <!-- Topbar -->
                <?php include("./../include/navbar.php") ?>
            </div>
            <!-- End of Content Wrapper -->
            <div class="container py-5" id="content">
                <div class="row  justify-content-center py-5">
                    <div class="col-12">
                        <form class="card p-5" action="./insertTask.php" method="POST">
                            <h2 class="text-center py-3">Assign Task</h2>
                            <div class="col mb-3">
                                <label for="employeeId" class="form-label">Employee Id</label>
                                <input type="text" name="empId" class="form-control">
                            </div>
                            <div class="col mb-3">
                                <label for="project" class="form-label">Task Name</label>
                                <input type="text" name="taskName" class="form-control">
                            </div>
                            <div class="col mb-4">
                                <label for="dueDate">Due Date</label>
                                <input type="date" name="dueDate" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success" style="width: 98%;margin:0 auto;"
                                name="sbmt">Assign
                                Project</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
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
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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