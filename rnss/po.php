<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Demo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="">
</head>
<body>
          <a href="purchase.php">BACK</a>
<div class="container">
  <div style="border:5px solid black" class="mt-5">
    
  <div>
    <h2><span class="text-primary font-weight-bold">Purchase </span><span class="text-info font-weight-bold">Control</span></h2>
    <div class="row">
      <div class="col-md-4 offset-2">
        <?php

          $conn = mysqli_connect("localhost", "root", "", "task_manager1") or die("error");
$sql="SELECT * FROM tm_pa_purchase_order ORDER BY id DESC LIMIT 1";
$res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0){
    
    while($row=mysqli_fetch_array($res)){
      ?>
        <h3><b>PurchaseControl</b></h3>
        <span style="word-wrap: break-word"><?php echo $row['delivary_add']; ?></span>
           
      </div>
      <div class="col-md-4 offset-2">
        <h3><b>Purchase Order</b></h3>
        <span style="word-wrap: break-word"><?php echo $row['supplier_add']; ?></span>
      </div>
    </div>

  </div>
  
  <div>
    <table class="table" align="center">
    <thead class="thead table-primary">
      <tr align="center"  >
        <th>SUPPLIER</th>
        <th>DELIVERY ADDRESS</th>
      </tr>
    </thead>
    <tbody>
      <tr align="center">
        <td><span style="word-wrap: break-word"><?php echo $row['supplier']; ?></span></td>
        <td><span style="word-wrap: break-word"><?php echo $row['delivary_add']; ?></span></td>
      </tr></tbody>
    </tbody>
  </table>
  </div>

<div>
    <table class="table" align="center">
    <thead class="thead table-primary">
      <tr align="center"  >
        <th>DELIVERY DATE</th>
        <th>REQUESTED BY</th>
        <th>APPROVED BY</th>
        <th>DEPARTMENT </th>
        <th>
      </tr>
    </thead>
    <tbody>
      <tr align="center">
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['req_by']; ?></td>
          <td><?php echo $row['approved_by']; ?></td>
            <td><?php echo $row['department']; ?></td>
      </tr></tbody>
    </tbody>
  </table>
  </div>

  <div>
    <table class="table">
      <thead class="thead table-primary">
        <tr align="center">
        <th>NOTES</th>
        <th>BILL NUMBER</th>

      </tr>
    </thead>
    <tbody>
     <tr align="center">
        <td><?php echo $row['noty']; ?></td>
        <td><?php echo $row['bill_no']; ?></td>

      </tr>
  </tbody>
    </table>
  </div>
  <?php
    }
  }
        ?>
  
  <div>
  <table class="table ">
    <thead class="thead table-primary">
      <tr>
        <th>ITEM NAME</th>
        <th>ITEM PRICE</th>
        <th>ITEM QUANTITY</th>
        <th>TAX</th>
        <th>TAX AMOUNT</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody class="">
    <?php

    $sql2="SELECT * FROM tm_pa_purchase_order ORDER BY id DESC LIMIT 1";
    $res2=mysqli_query($conn,$sql2);
    
    while($row=mysqli_fetch_array($res2)){
    $myitem = $row['item_name'];
    $myprice = $row['price'];
    $myquantity = $row['quantity'];

    $arrItem = explode(',', $myitem);
    $arrPrice = explode(',', $myprice);
    $arrQuantity = explode(',', $myquantity);
    $no=count($arrItem);
    $tax=null;
    $taxamount=0;
    $total=0;
    $totali=0;
    $pototal=0;
    $taxtotal=0;
    $grandtotal=0;
    for($i=0;$i<$no;$i++)
  {
    $total=$arrPrice[$i]*$arrQuantity[$i];
    $totali+=$taxamount;
    $grandtotal+=$total;
    $taxamount=0.05*$total;
    $taxtotal+=$taxamount;
    $pototal=$grandtotal+$taxtotal;

      echo "<tr>";
      
      echo "<td>".$arrItem[$i]."</td>"; 
      echo "<td>".$arrPrice[$i]."</td>";
      echo "<td>".$arrQuantity[$i]."</td>";
      echo "<th>".$tax."5%</th>";
      echo "<th>".$taxamount."</th>";
      echo "<th>".$total."</th>";
      echo "</tr>";
    }
  }
     ?>
     
    </tbody>
  </table>
  </div>
</div>
<div>
    <table class="table" align="center">
    <thead class="thead table-primary">
      <tr align="center"  >
        <th>GRAND TOTAL</th>
        <td><?php echo "<th>".$grandtotal."</th>"; ?></td>
       
        
        <th>
      </tr>
    </thead>
  </table>
  <div>
    <table class="table" align="center">
    <thead class="thead table-primary">
      <tr align="center"  >
        <th>TAX TOTAL</th>
        <td><?php echo "<th>".$taxtotal."</th>"; ?></td>
        
        <th>
      </tr>
    </thead>
  </table>
  </div>

    <div> 
    <table class="table" align="center">
    <thead class="thead table-primary">
      <tr align="center"  >
        <th>PO TOTAL</th>
       <td><?php echo "<th>".$pototal."</th>"; ?></td>
        
        <th>
      </tr>
    </thead>
  </table>
  </div>
  </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<center>
<button onclick="window.print()">Print the PO Report</button></center>
</body>
</html>

