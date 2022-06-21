<?php
 include_once("config.php");
 $query ="SELECT * FROM information ORDER BY hz_type ASC";  
 $result = mysqli_query($conn,$query);  
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REPORTS</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List of Reports</h6>
                        </div>
                        <div class="card-body">

                            <centre><a class="btn btn-info" href="add.php" title="click for edit" onclick="return confirm('Add new reports?')"><span class='glyphicon glyphicon-plus'></span>Add New Report</a></centre>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>LOCATION</th>
                                            <th>STATE</th>
                                            <th>REPORT NAME</th>
                                            <th>TYPE OF HAZARD</th>
                                            <th>DESCRIPTION</th>
											<th>TIME</th>
											<th>DATE</th>
											<th>LATITUDE</th>
											<th>LONGITUDE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                        $count=1;
                                        while($data=mysqli_fetch_array($result))
                                        {
                                                
                                            echo "<tr>";
                                            echo "<td>".$count."</td>" ;
                                            echo "<td>".$data["hz_location"]."</td>";
                                            echo "<td>".$data["hz_state"]."</td>";
                                            echo "<td>".$data["hz_repname"]."</td>";
                                  			echo "<td>".$data["hz_type"]."</td>";
											echo "<td>".$data["hz_desc"]."</td>";
											echo "<td>".$data["hz_time"]."</td>";
											echo "<td>".$data["hz_date"]."</td>";
											echo "<td>".$data["hz_lat"]."</td>";
											echo "<td>".$data["hz_lng"]."</td>";
                                            $count=$count+1;
                                            ?>
                                            <?php
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer 
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
             End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
