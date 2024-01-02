<?php
session_start();
if(isset($_SESSION['admin']) == null){
  header("location: ../login.php");
}


include '../connection.php';
$sql = "select count(*) as total from stud";
$query = mysqli_query($con,$sql);
$res = mysqli_fetch_array($query);
?>
<?php
$sql = "select count(*) as total from stud where status = 'active'";
$query = mysqli_query($con,$sql);
$result = mysqli_fetch_array($query);

?>
<?php
$sql = "select count(*) as total from stud where status = 'de-active'";
$query = mysqli_query($con,$sql);
$dd = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Management System</title>
  <?php include '../link.php'?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!-- DataTables -->
   <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <!--  -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" -->
           <!-- style="opacity: .8"> -->
      <span class="brand-text font-weight-light"><b><h5>Student Managment System</h5></b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="ss.png" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <div class="info">
          <a href="#" class="d-block"><b>WELLCOME <?php echo $_SESSION['admin']?></b></a>
        </div> -->
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview menu-open"> -->
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

      <nav class="mt-2">
            
            <a href="student.php" class="nav-link bg-info">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
               Admission Form
              </p>
            </a>
                </nav>
                <nav class="mt-2">
            
            <a href="info.php" class="nav-link  bg-info">
            <i class="fas fa-info"></i>
              <p>
               Students Information
              </p>
            </a>
                </nav>
                
                <nav class="mt-2">
                <a href="feestatus.php" class="nav-link bg-info">
            <i class="fas fa-comments-dollar"></i>
              <p>
              Fee Status
              </p>
            </a>
                </nav>
                <nav class="mt-2">
            
            <a href="newuser.php" class="nav-link  bg-info">
            <i class="fas fa-user-plus"></i>
              <p>
              Create New User
              </p>
            </a>
                </nav>

                <nav class="mt-2">
            
            <a href="logout.php" class="nav-link  bg-info">
              <i class="fas fa-sign-out-alt"></i>
              <p>
               LogOut
              </p>
            </a>
                </nav>
               
         
         
   <!-- -------------- DONT DELETE WORK------------------------ -->
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-red"><b>WELLCOME <?php echo $_SESSION['admin']?></b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $res['total']; ?></h3>

                <p>Total Admissions</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $result['total']; ?><sup style="font-size: 20px"></sup></h3>

                <p>Present Student</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $dd['total']; ?></h3>

                <p>Leave Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Total Fee Collect</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
              
          
             
                
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="container-fluid text-center bg-success">
            <h2>Students Information</h2>
            </div>
            <!-- /.card -->

            <div class="card col-12">
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="bg-info" id="dd">
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>NUMBER</th>
                    <th>SUBJECT</th>
                    <th>STANDARD</th>
                    <th>ADMISSION FEE</th>
                    <th>TUTION FEE</th>
                    <th>ADDRESS</th>
                    <th>JOIN DATE</th>
                    <th>STATUS</th>
                    <th>EDIT</th>
                  </tr>
                  </thead>
        <!-- ---------------------php start-------------------------------------- -->
        <tbody>
        <?php
         include '../connection.php';

         $sql = "SELECT * FROM `stud`";

         $query = mysqli_query($con,$sql);

         $res = mysqli_num_rows($query);
         
         $number = 1;

         while($data= mysqli_fetch_array($query)){

            ?>
           
                <tr>
                    <td><?php echo $number++; ?></td>
                    <td><?php echo $data['Image']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['f_name']; ?></td>
                    <td><?php echo $data['num']; ?></td>
                    <td><?php echo $data['sub']; ?></td>
                    <td><?php echo $data['standard']; ?></td>
                    <td><?php echo $data['add_fee']; ?></td>
                    <td><?php echo $data['tut_fee']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['join_date']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                     <td><a href="edit.php?id=<?php echo $data['id']; ?>"><i class="fas fa-edit" style= "padding: 0 10px";></i></a>
    <!-- <a href="delete.php?id=<?php echo $data['id']; ?>"><i class="fas fa-trash" style= "padding: 0 10px";></i></a></td> -->
                </tr>
            
        <?php
        }
        ?>

</tbody>
                  </table>
                  </div>
                  </div>


<!--The calendar -->
<div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="https://shahraizazam.000webhostapp.com/">ShahrazizAzam</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
 <!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 

<script>
$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>



