<?php
 include_once("config.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add New Report</title>

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
                <div class="container">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->

                    <!-- DataTales Example -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add New Report</h6>
                        </div>
                         <!-- Editable table -->

                         <form action="add.php" name="btnSave" method="post">
                          <table class="table text-center">
                            <thead>
                              <tr>
                                <td class="text-center">Location</td>
                                <td><input type="text" id="hz_location" name="hz_location" class="form-control validate" required></td>
                              </tr>
								<tr>
                                <td class="text-center">State</td>
                                <td>
									<div class="rs-select2 js-select-simple select--no-search">
                                <select name="hz_state" class="form-control validate" >
                                    <option disabled="disabled" selected="selected" >Choose option</option>
          <option>JOHOR</option>
          <option>KEDAH</option>
          <option>KELANTAN</option>
		<option>KUALA LUMPUR</option>
		  <option>MELAKA</option>
		  <option>NEGERI SEMBILAN</option>
		<option>PAHANG</option>
			<option>PENANG</option>
			<option>PERAK</option>
			<option>PERLIS</option>
			<option>SABAH</option>
			<option>SARAWAK</option>
			<option>SELANGOR</option>
			<option>TERENGGANU</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
									
									</td>
                              </tr>
                              <tr>
                                 <td class="text-center">Report's name </td>
                                 <td><input type="text" id="hz_repname" name="hz_repname" class="form-control validate" required></td>
                              </tr>
                              <tr>
                                 <td class="text-center">Type of Hazard</td>
                                 <td><div class="rs-select2 js-select-simple select--no-search">
                                <select name="hz_type" class="form-control validate" >
                                    <option disabled="disabled" selected="selected" >Choose option</option>
          <option>Physical hazards</option>
          <option>Ergonomic hazards</option>
          <option>Psychological hazards</option>
		  <option>Environmental hazards</option>
		  <option>Hazardous substances</option>
			<option>Biological hazards</option>
			<option>Radiation hazards</option>
			
                                </select>
                                <div class="select-dropdown"></div>
                            </div></td>
                              </tr>
                              <tr>
                                 <td class="text-center">Description</td>
                                 <td><textarea id="hz_desc" name="hz_desc" class="form-control validate" required rows="4" cols="50"></textarea></td>
                              </tr>
								 <tr>
                                 <td class="text-center">Time</td>
                                 <td><input type="time" id="hz_time" name="hz_time" class="form-control validate" required></td>
					
                              </tr>
								<tr>
								 <td class="text-center">Date</td>
                                 <td><input type="date" id="hz_date" name="hz_date" class="form-control validate" required></td>
								</tr>
								<tr>
								 <td class="text-center">Latitude</td>
                                 <td><input type="text" id="hz_lat" name="hz_lat" class="form-control validate" required></td>
								</tr>
								<tr>
								 <td class="text-center">Longitude</td>
                                 <td><input type="text" id="hz_lng" name="hz_lng" class="form-control validate" required></td>
								</tr>
                              <tr>
                                <td colspan="2"><button type="submit" name="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-save"></span> Report
                                </button>
                                
                                <a class="btn btn-danger" href="index.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
                                
                                </td>
                              </tr>

                            </thead>
                          </table>
                        </form>

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
<?php

if (isset($_POST['submit'])) {

    $hz_location=$_POST	['hz_location'];
	$hz_state=$_POST	['hz_state'];
    $hz_repname=$_POST	['hz_repname'];
    $hz_type=$_POST		['hz_type'];
    $hz_desc=$_POST	['hz_desc'];
	$hz_time=$_POST	['hz_time'];
	$hz_date=$_POST	['hz_date'];
	$hz_lat=$_POST	['hz_lat'];
	$hz_lng=$_POST	['hz_lng'];

	
    $add_query=mysqli_query($conn,"INSERT INTO information (hz_location, hz_state,hz_repname,hz_type,hz_desc,hz_time,hz_date,hz_lat,hz_lng) VALUES ('$hz_location' ,'$hz_state', '$hz_repname','$hz_type','$hz_desc','$hz_time','$hz_date','$hz_lat','$hz_lng')");
	
	
	
    if ($add_query) {
        echo '<script>alert("Data Updated"); </script>';
        echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
    }
    else
    {
        echo '<script>alert("Data Not Updated"); </script>';
        echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
    }
    
}
?>