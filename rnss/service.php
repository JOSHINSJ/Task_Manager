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

<?php
//Employee Name from Emp
if (isset($_REQUEST['request_name'])) {
    $output = "";
    $id = $_POST['supplier_id'];

    $query = "SELECT * FROM `tm_pa_fetch` WHERE `supplier_id`='$id'";
    $result = mysqli_query($con, $query);
    while ($data = $result->fetch_all(MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
            foreach ($data as $item) {
                $value1 = $item["supplier_name"];
		}
        
	}else{$value1="";}
}if($id=="")$value1="";
echo $value1;
}


//Employee phno from Emp

if (isset($_REQUEST['request_phno'])) {
    $output = "";
    $id = $_POST['supplier_id'];

    $query = "SELECT * FROM `tm_pa_fetch` WHERE `supplier_id`='$id'";
    $result = mysqli_query($con, $query);
    while ($data = $result->fetch_all(MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
            foreach ($data as $item) {
                $value1 = $item["phone_no"];
		}
        
	}else{$value1="";}
}if($id=="")$value1="";
echo $value1;
}

//Employee price from Emp

if (isset($_REQUEST['request_price'])) {
    $output = "";
    $id = $_POST['product_name'];

    $query = "SELECT * FROM `product` WHERE `product_name`='$id'";
    $result = mysqli_query($con, $query);
    while ($data = $result->fetch_all(MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
            foreach ($data as $item) {
                $value1 = $item["price"];
		}
        
	}else{$value1="";}
}if($id=="")$value1="";
echo $value1;
}

//Employee add from product

if (isset($_REQUEST['request_add'])) {
    $output = "";
    $id = $_POST['supplier_id'];

    $query = "SELECT * FROM `tm_pa_fetch` WHERE `supplier_id`='$id'";
    $result = mysqli_query($con, $query);
    while ($data = $result->fetch_all(MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
            foreach ($data as $item) {
                $value1 = $item["address1"];
		}
        
	}else{$value1="";}
}if($id=="")$value1="";
echo $value1;
}


//Employee supplier name from product

if (isset($_REQUEST['request_names'])) {
    $output = "";
    $id = $_POST['supplier_id'];

    $query = "SELECT * FROM `tm_pa_fetch` WHERE `supplier_id`='$id'";
    $result = mysqli_query($con, $query);
    while ($data = $result->fetch_all(MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
            foreach ($data as $item) {
                $value1 = $item["supplier_name"];
		}
        
	}else{$value1="";}
}if($id=="")$value1="";
echo $value1;
}

//Employee stock from Emp

if (isset($_REQUEST['request_stock'])) {
    $output = "";
    $id = $_POST['product_name'];

    $query = "SELECT * FROM `product` WHERE `product_name`='$id'";
    $result = mysqli_query($con, $query);
    while ($data = $result->fetch_all(MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
            foreach ($data as $item) {
                $value1 = $item["stock"];
		}
        
	}else{$value1="";}
}if($id=="")$value1="";
echo $value1;
}

//login email from 

if (isset($_REQUEST['request_role'])) {
    $output = "";
    $id = $_POST['username'];
    $query = "SELECT * FROM `tm_sa_login` WHERE `email`='$id'";
    $result = mysqli_query($con, $query);
    while ($data = $result->fetch_all(MYSQLI_ASSOC)) {
        if ($result->num_rows > 0) {
            foreach ($data as $item) {
                $value1 = $item["role"];
        }
        
    }else{$value1="";}
}
echo $value1;
}

?>