<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Task Manager</title>
     <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
  .error{
    color: red;
    font-style: italic;
  }
</style>

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
            <h1>GRN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./purchase.php">Home</a></li>
              <li class="breadcrumb-item active">GRN</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
         
<!-- Responsive Hover Table        -->


	 <!-- Main content -->
<form action="pa_insert.php" method="post" id="grnvalidate">
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
			<!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="card-body">
<?php
              $sql="SELECT `id` FROM `tm_pa_grn` ORDER BY `id` DESC LIMIT 1";
              $res=mysqli_query($con,$sql);
              $row = mysqli_fetch_assoc($res);
              $id=1;
              $id +=$row['id'];
            ?>
                  <div class="form-group">
                        <label>GRN Number</label>
                        <input type="text" class="form-control" placeholder="" name="grn_number" id="grn_number" value="<?php echo"$id"; ?>" style="width: 50%;" readonly>
                    </div>
                    <div class="form-group">
                        <label>PO No</label>
                        <input type="text" class="form-control" placeholder="" name="po_no" id="po_no" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Supplier No</label>
                        <input type="text" class="form-control" placeholder="" name="supplier_no" id="supplier_no" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Delivery No</label>
                        <input type="text" class="form-control" placeholder="" name="delivery_no" id="delivery_no" style="width: 60%;">
                    </div>

                    <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" Style="width:300px;" id="sdate" data-target-input="nearest">
                        <input type="date" name="sdate" id="sdate" class="form-control datetimepicker-input" data-target="#sdate"/>
                        <div class="input-group-append" data-target="#sdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                   
                <div class="form-group">
                  <label>Charging Details</label>
                  <select class="form-control select2bs4" name="charging_details" id="charging_details" style="width: 50%;">
                    <!--<option selected="selected">Alabama</option>-->
                    <option>Full Supply</option>
                    <option>Half Supply</option>
                    
                  </select>
                </div>

                    <button name="btnsave" type="submit" id="btnsave" class="btn btn-primary btn-md" Style="width: 100px;">Save</button>&nbsp
						&nbsp 
					<button name="btnclear" id="btnclear" class="btn btn-primary btn-md"  Style="width: 100px;">Clear</button>

				</div>
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
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
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
<!-- <script>
$(function () {
  //Date picker
    $('#sdate').datetimepicker({
        format: 'YYYY-MM-DD'
    })
  
});
</script> -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#grnvalidate').validate({
    rules: {
      po_no: {
        required: true,
        po_no: true,
      },
       supplier_no: {
        required: true,
        supplier_no: true,
      },
       delivery_no: {
        required: true,
        delivery_no: true,
      },
      remember: {
        required: true
      },
    },
    messages: {
      po_no: {
        required: "Please enter a PO_No number",
        po_no: "Your password must be at least 5 characters long"
      },
       supplier_no: {
        required: "Please enter supplier_no details",
        supplier_no: "Your password must be at least 5 characters long"
      },
       delivery_no: {
        required: "Please enter Delivery_no details",
        delivery_no: "Your password must be at least 5 characters long"
      },
      remember: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
 </script>
</body>
</html>
