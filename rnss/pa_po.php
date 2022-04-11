<?php
$con = mysqli_connect("localhost", "root", "", "task_manager1");
if($con)
{
  echo "";
}
else
{
  echo "not connecting";
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
   <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <style>
  .error{
    color: red;
    font-style: italic;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php
//include('header.php');
include('side_bar.php');
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchase Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./purchase.php">Home</a></li>
              <li class="breadcrumb-item active">Purchase Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
         
<!-- Responsive Hover Table        -->


   <!-- Main content -->
<form action="pa_insert.php" method="POST" id="povalidate">
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
              $sql="SELECT `id` FROM `tm_pa_purchase_order` ORDER BY `id` DESC LIMIT 1";
              $res=mysqli_query($con,$sql);
              $row = mysqli_fetch_assoc($res);
              $id=1;
              $id +=$row['id'];
            ?>
                  <div class="form-group">
                        <label>PO Number</label>
                        <input type="text" class="form-control" placeholder="" name="po_number" id="po_number" value="<?php echo"$id"; ?>" style="width: 60%;" readonly>
                    </div>
                    <div class="form-group">
                      <label>Supplier id</label>
                      <select class="form-control select2bs4" name="supplier_id" id="supplier_id" onchange ="featchnames();featchadd();" style="width: 60%; ">
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
                        <input type="text" class="form-control" placeholder="" name="supplier" id="supplier" readonly style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Supplier Addr</label>
                        <textarea  name="supplier_addr" id="supplier_addr" rows="5" cols="10" readonly Style="width:400px;" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Delivery Addr</label>
                        <textarea  name="delivery_addr" id="delivery_addr" rows="5" cols="10" Style="width:400px;" ></textarea>
                    </div>

                    <div class="form-group">
                         <label>Date:</label>
                            <div class="input-group date" Style="width:300px;" id="startdate" data-target-input="nearest">
                            <input type="text" name="startdate" id="startdate" class="form-control datetimepicker-input" data-target="#startdate"/>
                            <div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Request By</label>
                        <input type="text" class="form-control" placeholder="" name="req_by" id="req_by" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Approved By</label>
                        <input type="text" class="form-control" placeholder="" name="approved_by" id="approved_by" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" class="form-control" placeholder="" name="department" id="department" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Noty</label>
                        <input type="text" class="form-control" placeholder="" name="noty" id="noty" style="width: 60%;">
                    </div>
                    <div class="form-group">
                        <label>Bill No</label>
                        <input type="text" class="form-control" placeholder="" name="bill_no" id="bill_no" style="width: 60%;">
                    </div>
                      <label>Item Name</label>
                     <div class="form-group">
                      
                        <textarea  name="item_name" id="item_name" rows="3" cols="10" Style="width:300px;" ></textarea>
                    </div>

                    <div class="col-md-6">
                <div class="form-group">
                  <label>Multiple Item Selected</label>
                  <select class="select2bs4" multiple="multiple" name="item_name1" id="item_name1" data-placeholder="Select a State"
                          style="width: 135%;">
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
                    <label>Item Quantity</label>

                     <div class="form-group">
                        
                        <textarea  name="item_qty" id="item_qty" rows="5" cols="10" Style="width:300px;" ></textarea>
                    </div>
                    <label>Price</label>
                    <div class="form-group">
                        
                        <textarea  name="item_price" id="item_price" rows="5" cols="10" Style="width:300px;" ></textarea>
                    </div>
                     

                    
                    <button name="btnsave4" type="submit" id="btnsave" class="btn btn-primary btn-md" Style="width: 100px;">Save</button>&nbsp
            &nbsp 
          <button type="reset" name="btnclear" id="btnclear" value="reset" class="btn btn-primary btn-md"  Style="width: 100px;">Clear</button>
            &nbsp 

       


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

<script>
$(function () {
  //Date picker
    $('#startdate').datetimepicker({
        format: 'YYYY-MM-DD'
    })
  
});

 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    });

</script>

<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#povalidate').validate({
    rules: {
      delivery_addr: {
        required: true,
        
      },
      req_by: {
        required: true,
       
      },
      approved_by: {
        required: true,
      
      },
       department: {
        required: true,
      
      },
       noty: {
        required: true,
      
      },
       bill_no: {
        required: true,
      
      },
      remember: {
        required: true
      },
    },
    messages: {
       delivery_addr: {
        required: "Please enter a delivery_Address",
        
      },
       req_by: {
        required: "Please enter a req_by",
        
      },
       approved_by: {
        required: "Please enter a approved_by",
       
      },
      department: {
        required: "Please enter a approved_by",
       
      },
      noty: {
        required: "Please enter a approved_by",
       
      },
      bill_no: {
        required: "Please enter a approved_by",
       
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
function featchnames() {
    var variable= document.getElementById('supplier_id').value;
    $.ajax({
        url: "service.php?request_name",
        type: "POST",
        data: {
            "supplier_id": variable
        },
        success: function (response) {
            document.getElementById('supplier').value = response;
        }
    });
}

function featchadd() {
    var variable= document.getElementById('supplier_id').value;
    $.ajax({
        url: "service.php?request_add",
        type: "POST",
        data: {
            "supplier_id": variable
        },
        success: function (response) {
            document.getElementById('supplier_addr').value = response;
        }
    });
}
</script>
</body>
</html>
