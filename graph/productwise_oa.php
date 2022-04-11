
<?php include "db_connect.php"; ?>

<?php
    if(isset($_POST["product"]))
    {
        $query = "SELECT *, COUNT(*) AS no  FROM `tm_sa_order_acceptance`  WHERE `product_name`= '".$_POST["product"]."'  GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query); 
        while($row = mysqli_fetch_assoc($res))
        {
            $output[] = array(
                'date' => date("d-m-Y", strtotime($row['date'])),
                'count' => $row['no']
            );

        }
     
    }
    else{$output="NO any data";}
    echo json_encode($output);

?>