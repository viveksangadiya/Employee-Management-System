<?php 
	include("./idSet.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $row['fname']." Tasks"?></title>

    <link href="./../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="./../css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include("./../include/empSidebar.php") ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div>
                <?php include("./../include/empNavbar.php") ?>
            </div>

            <div class="table-responsive mt-5 ml-3 mr-3" id="no-more-tables">
                <table class="table bg-white table-striped table-hover">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>Task Id</th>
                            <th>Task Name</th>
                            <th>Due Date</th>
                            <?php 
                            
                            if($row["status"] == "1"){
                                echo "<th>Complete</th>";
                            }else{
                                echo "<th>Status</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        require_once("./../include/db.php");

                        $query = "SELECT * FROM `task` WHERE `eid` = $id";
                        
                        $result = mysqli_query($conn, $query);
              
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){   
                        ?>
                        <tr>
                            <td data-title="Task id">
                                <?php echo $row["tid"]; ?>
                            </td>
                            <td data-title="Task Name">
                                <?php echo $row["pname"]; ?>
                            </td>
                            <td data-title="Due Date">
                                <?php echo $row["dueDate"]; ?>
                            </td>
                            <?php 
                                if($row['status'] == "1"){
                                    echo "<td data-title='Status'>Completed</td>";
                                }else{
                                    echo "<td><a class='btn btn-danger' href=\"taskSubmit.php?pid=$row[tid]&id=$row[eid]\">Submit</a></td>"; 
                                }
                            ?>

                        </tr>
                        <?php
                               }
                            }else{
                                echo ("<SCRIPT LANGUAGE='JavaScript'>
                                    window.alert('Data Not Found');
                                    window.location.href='./empWel.php';
                                    </SCRIPT>");
                            }  
                        ?>



                    </tbody>
                </table>
            </div>

        </div>

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
                    <div class="modal-body">Select "Logout" below if you are ready to end your
                        current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="index.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="./../vendor/jquery/jquery.min.js"></script>
        <script src="./../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="./../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./../js/sb-admin-2.min.js"></script>

        <script src="./../js/index.js"></script>
</body>

</html>