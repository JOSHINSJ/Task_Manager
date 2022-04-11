<?php
$conn = mysqli_connect("localhost", "root", "", "task_manager1");
if($conn)
{
  echo "";
}
else
{
  echo "not connecting";
}
?>

<!-- GRN INSERT -->

<?php

if(isset($_POST["btnsave"]))
  {   
    include('pa_grn.php');
    $grn_number=$_POST['grn_number'];
    $po_no=$_POST['po_no'];
    $supplier_no=$_POST['supplier_no'];
    $delivery_no=$_POST['delivery_no'];
    $startdate=$_POST['sdate'];
    $charging_details=$_POST['charging_details'];
     

 if(mysqli_query($conn,"INSERT INTO tm_pa_grn(`id`,`pur_order_no`,`supplier_no`,`delivary_no`,`date`,`charging_details`) VALUES ('$grn_number','$po_no','$supplier_no','$delivery_no','$startdate','$charging_details')")){
        ?>
        <script>
         alert("Information Saved");
                window.location.replace("pa_grn.php");
          
        </script>
      <?php 
    }
else{
   ?>
        <script>
          alert("Something went wrong");
                   window.location.replace("pa_grn.php");
        </script>
      <?php  
}
  }


  ?>


<!-- Stock Details -->
<?php

if(isset($_POST["btnsave1"]))
  {   
    include('pa_stock.php');
    $stock_id=$_POST['stock_id'];
    $product_name=$_POST['product_name'];
    $product_cat=$_POST['product_cat'];
    $stock=$_POST['stock'];
    

 if(mysqli_query($conn,"INSERT INTO tm_pa_stock (id,product_name,product_category,total_stock)VALUES ('$stock_id','$product_name','$product_cat','$stock')")){
    ?>
        <script>
         alert("Information Saved");
                window.location.replace("pa_stock.php");
          
        </script>
      <?php 
    }
else{
   ?>
        <script>
          alert("Something went wrong");
                   window.location.replace("pa_stock.php");
        </script>
      <?php  
}
  }


  ?>

  ?>


<!-- REQUEST INSERT -->
<?php

if(isset($_POST["btnsave2"]))
  {   
    include('pa_request.php');
    $req_number=$_POST['req_number'];
    $supplier_id=$_POST['supplier_id'];
    $supplier_name=$_POST['supplier_name'];
    $Ph_no=$_POST['ph_no'];
    $product_name=$_POST['product_name'];
    $qty=$_POST['qty'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $re_date=$_POST['re_date'];
    $department=$_POST['department'];
    
    

 if(mysqli_query($conn,"INSERT INTO tm_pa_request(`req_no`, `v_id`, `v_name`, `ph_no`, `product_name`, `quantity`, `price`, `date`, `re_schedule_date`, `department`) VALUES ('$req_number','$supplier_id','$supplier_name','$Ph_no','$product_name','$qty','$price','$date','$re_date','$department')")){
        ?>
        <script>
          alert("Information Saved");
                window.location.replace("pa_request.php");
          
        </script>
      <?php  
  


    }
else{
   ?>
        <script>
        alert("Something went wrong");
                   window.location.replace("pa_request.php");
        </script>
      <?php  
}
  }


  ?>



  <!-- DIRECT ISSUE INSERT -->


<?php

if(isset($_POST["btnsave3"]))
  {   
    include('pa_direct_issue.php');
    $issue_number=$_POST['issue_number'];
    $start_date=$_POST['start_date'];
    $product_name=$_POST['product_name'];
    $issued_to=$_POST['issued_to'];
    $issued_by=$_POST['issued_by'];
    

 if(mysqli_query($conn,"INSERT INTO tm_pa_direct_issue (id,date,product_name,issued_to,issued_by)VALUES ('$issue_number','$start_date','$product_name','$issued_to','$issued_by')")){
    ?>
        <script>
         alert("Information Saved");
                window.location.replace("pa_direct_issue.php");
          
        </script>
      <?php 
    }
else{
   ?>
        <script>
          alert("Something went wrong");
                   window.location.replace("pa_direct_issue.php");
        </script>
      <?php  
}
  }


  ?>

  ?>

<!-- PARCHASE ORDER -->
<?php

if(isset($_POST["btnsave4"]))
  {   
    $po_number=$_POST['po_number'];
    $supplier_id=$_POST['supplier_id'];
    $supplier=$_POST['supplier'];
    $delivery_addr=$_POST['delivery_addr'];
    $supplier_addr=$_POST['supplier_addr'];
    $startdate=$_POST['startdate'];
    $req_by=$_POST['req_by'];
    $approved_by=$_POST['approved_by'];
    $department=$_POST['department'];
    $noty=$_POST['noty'];
    $bill_no=$_POST['bill_no'];
    $item_name=$_POST['item_name'];
    $item_qty=$_POST['item_qty'];
    $item_price=$_POST['item_price'];
    
    

 if(mysqli_query($conn,"INSERT INTO tm_pa_purchase_order (`id`, `supplier_id`, `supplier`, `delivary_add`, `supplier_add`, `date`, `req_by`, `approved_by`, `department`, `noty`, `bill_no`, `item_name`, `quantity`, `price`) VALUES 
                                                        ('$po_number','$supplier_id','$supplier','$delivery_addr','$supplier_addr','$startdate','$req_by','$approved_by','$department','$noty','$bill_no','$item_name','$item_qty','$item_price')")){
        ?>
        <script>
          alert("Inserted");
          window.location.replace("po.php");
        </script>
      <?php  
    }
else{
   ?>
        <script>
         alert("Something went wrong");
                   window.location.replace("pa_po.php");
         
        </script>
      <?php  
}
  }
  ?>