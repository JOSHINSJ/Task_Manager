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
            <h1>Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./purchase.php">Home</a></li>
              <li class="breadcrumb-item active">Request</li>
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
              $sql="SELECT `req_no` FROM `tm_pa_request` ORDER BY `req_no` DESC LIMIT 1";
              $res=mysqli_query($con,$sql);
              $row = mysqli_fetch_assoc($res);
              $req_no=1;
              $req_no +=$row['req_no'];
            ?>
                <div class="card-body">

                  <div class="form-group">
                        <label>Req Number</label>
                        <input type="text" class="form-control" placeholder="" name="req_number" id="req_number" value="<?php echo"$req_no"; ?>" style="width: 60%;" readonly>
                    </div>
                      <div class="form-group">
                      <label>Supplier id</label>
                      <select class="form-control select2bs4" name="supplier_id" id="supplier_id" onchange ="featchname();featchphno();" style="width: 60%; ">
                       <option></option>
                      <?php
                        $query1 = "SELECT `supplier_id` FROM `tm_pa_fetch` ORDER BY `supplier_id` ASC";
                        $res1 = mysqli_query($con,$query1); 
                        while($row1 = mysqli_fetch_assoc($res1)){
                        echo "<option>".$row1['supplier_id']."</option>";
                        }
                      ?>
                      </select>
                    </div>    
                    <div class="form-group">
                        <label>Supplier Name</label>
                        <input type="text" class="form-control" placeholder="" name="supplier_name" id="supplier_name" readonly style="width: 60%;">
                    </div>
                     <div class="form-group">
                        <label>Supplier Ph_No</label>
                        <input type="text" class="form-control" placeholder="" name="ph_no" id="ph_no" readonly style="width: 60%;">
                    </div>
                     <div class="form-group">
                      <label>Product Name</label>
                      <select class="form-control select2bs4" name="product_name" id="product_name" onchange="featchprice();" style="width: 60%; ">
                      <option></option>
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
                        <label>Quantity</label>
                        <input type="text" class="form-control" placeholder="" name="qty" id="qty" onclick="ttotal();" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="" name="price" id="price" onclick="ttotal();" readonly style="width: 60%;">
                    </div>

          <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" Style="width:300px;" id="date" data-target-input="nearest">
                        <input type="text" name="date" id="date" class="form-control datetimepicker-input" data-target="#date"/>
                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label>Re-schedule Date:</label>
                    <div class="input-group date" Style="width:300px;" id="re_date" data-target-input="nearest">
                        <input type="text" name="re_date" id="re_date" class="form-control datetimepicker-input" data-target="#re_date"/>
                        <div class="input-group-append" data-target="#re_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <label>Department</label>
                        <input type="text" class="form-control" placeholder="" name="department" id="department" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="" name="price_1" id="price_1" style="width: 60%;" hidden>
                    </div>

                    <button name="btnsave2" type="submit" id="btnsave2" class="btn btn-primary btn-md" Style="width: 100px;">Save</button>&nbsp
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


<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>


<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});

$(function () {
    // Summernote
    $('#summernote').summernote()
});

$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  
  //Date picker
    $('#date').datetimepicker({
        format: 'YYYY-MM-DD'
    })
  
  //Date picker
    $('#re_date').datetimepicker({
        format: 'YYYY-MM-DD'
    })
  
  //Date picker
    $('#duedate').datetimepicker({
        format: 'L'
    })
  
});
</script>
<script>
$(function () {
  $.validator.setDefaults({
     function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#grnvalidate').validate({
    rules: {
      supplier_id: {
        required: true,
        
      },
       product_name: {
        required: true,
        
      },
       qty: {
        required: true,
     
      },
       department: {
        required: true,
       
      },
      remember: {
        required: true
      },
    },
    messages: {
      supplier_id: {
        required: "Please enter a Supplier_id",
       
      },
       product_name: {
        required: "Please enter a Product_name",

      },
       qty: {
        required: "Please enter Qty details",
      
      },
        department: {
        required: "Please enter department details",
   
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
function featchname() {
    var variable= document.getElementById('supplier_id').value;
    $.ajax({
        url: "service.php?request_name",
        type: "POST",
        data: {
            "supplier_id": variable
        },
        success: function (response) {
            document.getElementById('supplier_name').value = response;
        }
    });
}

function featchphno() {
    var variable= document.getElementById('supplier_id').value;
    $.ajax({
        url: "service.php?request_phno",
        type: "POST",
        data: {
            "supplier_id": variable
        },
        success: function (response) {
            document.getElementById('ph_no').value = response;
        }
    });
}

function featchprice() {
    var variable= document.getElementById('product_name').value;
    $.ajax({
        url: "service.php?request_price",
        type: "POST",
        data: {
            "product_name": variable
        },
        success: function (response) {
            document.getElementById('price').value = response;
             document.getElementById('price_1').value = response; 
        }
    });
}

</script>
<script>
function ttotal() {
    var price= document.getElementById('price_1').value;
    var qty= document.getElementById('qty').value;
    var total=price * qty;
    document.getElementById('price').value=total;
}
</script>

</body>
</html>
