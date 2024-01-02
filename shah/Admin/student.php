<?php
include '../connection.php';

session_start();
if(isset($_SESSION['admin']) == null){
  header("location: ../login.php");
}

?>

<?php

include '../connection.php';
$sql = "select count(*) as total from stud";
$query = mysqli_query($con,$sql);
$res = mysqli_fetch_array($query);

?>
<?php
include '../connection.php';
$sql = "select count(*) as total from stud where status = 'active'";
$query = mysqli_query($con,$sql);
$result = mysqli_fetch_array($query);

?>
<?php
include '../connection.php';
$sql = "select count(*) as total from stud where status = 'de-active'";
$query = mysqli_query($con,$sql);
$dd = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-BOOKs</title>
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
      <span class="brand-text font-weight-light"><b><h5>E-BOOKS</h5></b></span>
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
        </div>
      </div> -->

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
            
            <a href="student.php" class="nav-link  bg-info">
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
                <a href="feestatus.php" class="nav-link  bg-info">
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

          <!-- ------------------------------------------form Start----------------------------------------     -->

          <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header text-center">
                <h3 class="card-title">Admission Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body">
                <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Student ID &nbsp;</label> -->
                    <input type="file" class="form-control" name="image"  placeholder="Insert Image" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Student ID &nbsp;</label>
                    <input type="text" class="form-control" name="id"  placeholder="Enter Id" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label >Father Name</label>
                    <input type="text" class="form-control" name="f_name"  placeholder="Enter Father Name">
                  </div>
                  <div class="form-group">
                    <label >Mobile Number</label>
                    <input type="text" class="form-control" name="num" placeholder="Mobile Number">
                  </div>
                  <div class="form-group">
                    <label >Category</label>
                    <select  class="form-control" name="sub">
                    <option>Select Category</option>
                    <option>Pre-Engeneering</option>
                    <option>B.Com</option>
                    <option>Computer Science</option>
                    <option>B.B.A</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Standard</label>
                    <input type="text" class="form-control" name="standard" placeholder="Enter Standard">
                  </div>
                  <div class="form-group">
                    <label >Admission Fee</label>
                    <input type="number" class="form-control" name="add_fee" placeholder="Enter Fee">
                  </div>
                  <div class="form-group">
                    <label >Tution Fee</label>
                    <input type="number" class="form-control" name="tut_fee" placeholder="Enter Fee">
                  </div>
                  <div class="form-group">
                    <label >Address</label>
                    <input type="text" class="form-control" name="address"  placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Joining Date</label>
                    <input type="date" class="form-control" name="join_date" >
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <input type="text" class="form-control" name="status" value="Active" readonly>
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="Sub"  class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            


            <!-- /.card -->

            <!-- general form elements -->
           
            <!-- /.card -->

         
            <!-- /.card -->
            <!-- Horizontal Form -->
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!-- Control Sidebar
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


         <!-- --------------------------------------------------form End-------------------------------- -->
            <!-- --------PHP WORK--------- -->
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                include '../connection.php';

                if(isset($_POST['sub'])){

                  $filename = $_FILES["image"]["name"];
                  $tempname = $_FILES["image"]["tmp_name"];
                  $folder = "images/".$folder;
                  move_uploaded_file($tempname,$folder);


                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $fname = $_POST['f_name'];
                    $number = $_POST['num'];
                    $sub = $_POST['sub'];
                    $standard = $_POST['standard'];
                    $addfee = $_POST['add_fee'];
                    $tutfee = $_POST['tut_fee'];
                    $add = $_POST['address'];
                    $joindate = $_POST['join_date'];
                    $status = $_POST['status'];
                
    
                   if($id != "" && $id !== null){
                    $sqlquery = "INSERT INTO `stud` (`id`,`name`, `f_name`, `num`, `sub`, `standard`, `add_fee`, `tut_fee`, `address`, `join_date` , `status`,`image`) VALUES ('$id','$name', '$fname', '$number', '$sub', '$standard', '$addfee', '$tutfee', '$add', '$joindate' , '$status','$folder');";
                   }else{ 

                    $sqlquery = "INSERT INTO `stud` (`id`, `name`, `f_name`, `num`, `sub`, `standard`, `add_fee`, `tut_fee`, `address`, `join_date`, `status`,`image`) VALUES ('0','$name', '$fname', '$number', '$sub', '$standard', '$addfee', '$tutfee', '$add', '$joindate' , '$status'.'$folder');";
                   }

                    $query = mysqli_query($con,$sqlquery);

                    if($query){

                        echo "<script>window.location.replace('info.php');</script>";
              

                    }else{

                        echo "<script>alert('SomeThing Went Wrong')</script>";
                    }

                }
                
           
                
                ?>

            <!-- -----------PHP END--------- -->
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
</body>
</html>
