<?php
session_start();
if(!$_SESSION['task_manager1'])
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Task Manager</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<?php
include('navbar.php');
include('side_bar.php');

?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Purchase Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-md-4 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cart-arrow-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Stock Details</span>
                <span class="info-box-number">
                  
                  <?php
                    $con=mysqli_connect("localhost","root","","task_manager1");
                    if($con)
                          {
                            

                          }
                          
                        ?>
                        <?php  
                        $sql="SELECT SUM(total_stock) AS total FROM `tm_pa_stock` WHERE 1";
                        $task=mysqli_query($con,$sql);
                         while ($result=mysqli_fetch_assoc($task)) {
                       echo "".$result['total']."";
                       
                      }
                       
                                
                    ?>
                              

                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-md-4 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">GRN Report</span>
                <a href="grn_create.php">
                <span cl ass="info-box-number">
                  
                  <?php
                    $con=mysqli_connect("localhost","root","","task_manager1");
                    if($con)
                          {
                            

                          }
                          
                        ?>
                        <?php  
                        $sql="SELECT COUNT(id) FROM `tm_pa_grn` WHERE 1";
                        $task=mysqli_query($con,$sql);
                         while ($result=mysqli_fetch_assoc($task)) {
                       echo "".$result['COUNT(id)']."";
                       
                      }
                       
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          </a>
          <!-- /.col -->
          <div class="col-12 col-md-4 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Suppliers</span>
                <span class="info-box-number">


              <?php
                    $con=mysqli_connect("localhost","root","","task_manager1");
                    if($con)
                          {
                            

                          }
                          
                        ?>
                        <?php  
                        $sql="SELECT COUNT(supplier) FROM `tm_pa_purchase_order` WHERE 1";
                        $task=mysqli_query($con,$sql);
                         while ($result=mysqli_fetch_assoc($task)) {
                       echo "".$result['COUNT(supplier)']."";
                       
                      }
                       
                ?>
                </span>
              </div>
            </div>
          </div>
        </div>
         
<!--  TOTAL STOCK -->
<section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- sales graph -->
          <section class="col-lg-11 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  TOTAL STOCK
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                      <?php
                        include('connect3.php');
                        ?>                 
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
                  
<!-- PURCHASE ORDER -->
<section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- sales graph -->
          <section class="col-lg-11 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-line mr-1"></i>
                  PURCHASE ORDER
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                      <?php
                        include('po_graph.php');
                        ?>                 
                  </div>  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
