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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Direct Issue</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./purchase.php">Home</a></li>
              <li class="breadcrumb-item active">Direct Issue</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
         
<!-- Responsive Hover Table        -->


	 <!-- Main content -->
<form action="pa_insert.php" method="post">
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
			<!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
				<?php
              $sql="SELECT `id` FROM `tm_pa_direct_issue` ORDER BY `id` DESC LIMIT 1";
              $res=mysqli_query($con,$sql);
              $row = mysqli_fetch_assoc($res);
              $id=1;
              $id +=$row['id'];
            ?>
                <div class="card-body">

                  <div class="form-group">
                        <label>Issue Number</label>
                        <input type="text" class="form-control" placeholder="" name="id" id="id" value="<?php echo"$id"; ?>"style="width: 60%;" readonly>
                    </div>

                    <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" Style="width:300px;" id="startdate" data-target-input="nearest">
                        <input type="date" name="start_date" id="start_date" class="form-control datetimepicker-input" data-target="#startdate"/>
                        <div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                     <div class="form-group">
                      <label>Product Name</label>
                      <select class="form-control select2bs4" name="product_name" id="product_name" style="width: 60%; ">
                       <!-- <option selected="selected"></option> -->
                      <?php
                        $query1 = "SELECT `product_name` FROM `tm_pa_direct_issue` ORDER BY `product_name` ASC";
                        $res1 = mysqli_query($con,$query1); 
                        while($row1 = mysqli_fetch_assoc($res1)){
                        echo "<option>".$row1['product_name']."</option>";
                        }
                      ?>
                      </select>
                    </div>    
                    <div class="form-group">
                        <label>Issued To</label>
                        <input type="text" class="form-control" placeholder="" name="issued_to" id="issued_to" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Issued By</label>
                        <input type="text" class="form-control" placeholder="" name="issued_by" id="issued_by" style="width: 60%;">
                    </div>

                    <button name="btnsave3" type="submit" id="btnsave3" class="btn btn-primary btn-md" Style="width: 100px;">Save</button>&nbsp
						&nbsp 
					<button type="reset" name="btnclear" id="btnclear" value="reset"  Style="width: 100px;">Clear</button>

				</div>
				</form>
				</div>
			</div>
			</div>
		 </div>
		</div>
	</section>
</form>
	
	<!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy;2021 <a href="task.html">Task Manager</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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

<!-- Page specific script -->
<script>

</script>
</body>
</html>

