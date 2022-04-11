<?php
    include('DB.php');
    $ids = array();
    // $ids = implode(",",$_POST["id"]);
    $ids = $_POST["id"];
    
    
    // $deactive = "UPDATE tm_sa_order_acceptance SET status=0 where n_id IN(".$ids.")";
    $deactive = "UPDATE tm_sa_order_acceptance SET status=0 where n_id= ".$ids." ";
    
    $result = mysqli_query($connection,$deactive);
    echo mysqli_error($connection);

?>