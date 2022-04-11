<?php
$con = mysqli_connect("localhost", "root", "", "task_manager1");
if($con)
{
  echo "connected";
}
else
{
  echo "not connecting";
}

if(isset($_POST["btnsave"]) && $_POST["btnsave"]!="")
{   
    $product_name=$_POST['product_name'];
    $stock_id=$_POST['stock_id'];
    $product_cat=$_POST['product_cat'];
    $stock=$_POST['stock'];
    

$sql=("INSERT INTO `tm_pa_stock`(id,product_name,product_category,total_stock)VALUES($stock_id,'$product_name','$product_cat',$stock)");
mysqli_query($con,$sql);
{
  alert("inserted");
}
}
  ?>