<?php
$con=mysqli_connect("localhost","root","","task_manager1");
if($con)
{
  echo "";
}

?>  
 <?php
      if(isset($_POST['btnsave']))
      {
         $id=$_POST['id'];
                        $sql="SELECT * FROM `tm_pa_grn` WHERE id='$id'";
                        $task=mysqli_query($con,$sql);

                    

      }
                       
                       
                        
?>


<!doctype html>
<a href="purchase.php">BACK</a>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <title></title>
</head>
<body>
<section class="container border my-5">
 
<div class="container">
  <div style="border:3px solid black" class="mt-5">

<section class="">
  <div class="">
    <h2 class="border text-center my-5">Goods Recieved Note</h2>
  </div>
<?php
 if(mysqli_num_rows($task) > 0)
    {
      while ($row = mysqli_fetch_array($task))
       {
?>

  <div class="content align-center" align="">
  <div class="form-group">
    <span class="label label-default">Package Order No.</span>
    <input type="text" class="form-control " name="" value="<?php echo $row['pur_order_no']; ?>">
  </div>
  <div class="form-group">
    <span class="label label-default">Supplier Number</span>
    <input type="text" class="form-control " name="" value="<?php echo $row['supplier_no']; ?> ">
  </div>
  <div class="form-group">
    <span class="label label-default">Delivery Note No.</span>
    <input type="text" class="form-control " name="" value="<?php echo $row['delivary_no']; ?>">
  </div>
  <div class="form-group">
    <span class="label label-default">Date Order Recieved</span>
    <input type="text" class="form-control " name="" value="<?php echo $row['date']; ?>">
  </div>
  </div>
  <hr>
  <?php
}
}else
{
  echo "no data";
}

  ?>

  <div class="row" align="center">
  <div class="col-lg-2">

  </div>
  <div class="col-lg-10">
    <div class="row">
      <div class="col-lg-3">
        <strong>Cash Course</strong>
      </div>
      <div class="col-lg-1">
          <strong>|</strong>
      </div>
      <div class="col-lg-3">
        <strong>Account Code</strong>
      </div>
      <div class="col-lg-1">
            <strong>|</strong>
      </div>
      <div class="col-lg-3">
        <strong>Job Code</strong>
      </div>
      <div class="col-lg-1">
            <strong></strong>
      </div>
    </div>
  </div>
  </div>
<br> <br>
  <div class="row"align="center">
  <div class="col-lg-2">
      <strong>Charging Detail</strong>
  </div>
  <div class="col-lg-10">
    <div class="row" >
      <div class="col-lg-3">
        <input type="text" name="" class="form-control" value="">
      </div>
      <div class="col-lg-1">
          <strong>|</strong>
      </div>
      <div class="col-lg-3">
<input type="text" name="" class="form-control" value="">
      </div>
      <div class="col-lg-1">
            <strong>|</strong>
      </div>
      <div class="col-lg-3">
<input type="text" name="" class="form-control" value="">
      </div>
      <div class="col-lg-1">
            <strong></strong>
      </div>
    </div>
  </div>
  </div>

</section>

<section >
  <hr>
</section>

<section>
  <div class="row">
    <div class="col-lg-4">
      <strong>Full Order Delivery <input type="checkbox"  name="" value=""> </strong>
    </div>
    <div class="col-lg-4">
      <strong>pass Order Delivery <input type="checkbox"  name="" value=""> </strong>
    </div>
    <div class="col-lg-4">
      <strong>Delivery Note Attached <input type="checkbox"  name="" value=""> </strong>
    </div>
  </div>
</section>
<hr>
<br>
<br>
  <section align="center">
    <textarea name="name" rows="10" cols="140" placeholder="Comments"></textarea>
  </section>

</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<center>
<button onclick="window.print()">Print the GRN Report</button></center>
</body>
</html>