
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
            <h1>Stock</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./purchase.php">Home</a></li>
              <li class="breadcrumb-item active">Stock</li>
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
				<?php
              $sql="SELECT `id` FROM `tm_pa_stock` ORDER BY `id` DESC LIMIT 1";
              $res=mysqli_query($con,$sql);
              $row = mysqli_fetch_assoc($res);
              $id=1;
              $id +=$row['id'];
            ?>
                <div class="card-body">

                  <div class="form-group">
                        <label>Stock id</label>
                        <input type="text" class="form-control" placeholder="" name="stock_id" id="stock_id" value="<?php echo"$id"; ?>" style="width: 60%;" readonly>
                    </div>
                    <div class="form-group">
                      <label>Product Name</label>
                      <select class="form-control select2bs4" name="product_name" id="product_name" onclick="featchstock(); stotal()" style="width: 60%; ">
                       <option> </option> 
                      <?php
                        $query1 = "SELECT `product_name` FROM `product` ORDER BY `product_name` ASC";
                        $res1 = mysqli_query($con,$query1); 
                        while($row1 = mysqli_fetch_assoc($res1)){
                        echo "<option>".$row1['product_name']."</option>";
                        }
                      ?>
                      </select>
                    </div>    
                    <div class="form-group">
                  <label>Product Catagory</label>
                  <select class="form-control select2bs4" name="product_cat" id="product_cat" style="width: 60%;">
                    <!--<option selected="selected">Alabama</option>-->
                    <option>Accessioris</option>
                    <option>Product Bases</option>
                    <option>computer based</option>
                    <option>serer realeted</option>
                    
                  </select>
                </div>
                    <div class="form-group">
                        <label>Current Stock</label>
                        <input type="text" class="form-control" placeholder="" name="stock1" id="stock1" onclick="stotal();" readonly style="width: 60%;">
                    </div>
                     <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" placeholder="" name="stock" id="stock" style="width: 60%;">
                    </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="" name="stock2" id="stock2" style="width: 60%;" hidden>
                    </div>

                  </select>
                </div>

                    <button name="btnsave1" type="submit" id="btnsave1" class="btn btn-primary btn-md" Style="width: 100px;">Save</button>&nbsp
						&nbsp 
					<button type="reset" name="btnclear" id="btnclear" class="btn btn-primary btn-md"  Style="width: 100px;">Clear</button>

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

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>

<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#grnvalidate').validate({
    rules: {
      stock_id: {
        required: true,
        stock_id: true,
      },
      product_name: {
        required: true,
        product_name: true,
      },
       product_cat: {
        required: true,
        product_cat: true,
      },
       stock: {
        required: true,
        stock: true,
      },
      remember: {
        required: true
      },
    },
    messages: {
      stock_id: {
        required: "Please enter a GRN number",
        stock_id: "Please enter a vaild email address"
      },
      product_name: {
        required: "Please enter a PO_No number",
        product_name: "Your password must be at least 5 characters long"
      },
       product_cat: {
        required: "Please enter supplier_no details",
        product_cat: "Your password must be at least 5 characters long"
      },
       stock: {
        required: "Please enter Delivery_no details",
        stock: "Your password must be at least 5 characters long"
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
 <script>
function featchstock() {
    var variable= document.getElementById('product_name').value;
    $.ajax({
        url: "service.php?request_stock",
        type: "POST",
        data: {
            "product_name": variable
        },
        success: function (response) {
            document.getElementById('stock1').value = response;
             document.getElementById('stock2').value = response;
        }

    });
}
</script>
<script>
function stotal() {
    var stock1= parseInt(document.getElementById('stock2').value);
    var stock= parseInt(document.getElementById('stock').value);
    var sum=stock + stock1;
    document.getElementById('stock1').value=sum;
}
</script>
</body>
</html>



