<?php include "db_connect.php"; ?>

<?php
    
    
        $sql ="SELECT *, COUNT(*) AS no  FROM tm_sa_order_acceptance  WHERE MONTH(date) = MONTH('2021-05-01') AND YEAR(date) = YEAR(CURRENT_DATE()) GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$sql);
        if($row = mysqli_fetch_assoc($res) != NULL){
        while($row = mysqli_fetch_assoc($res))
        {
            $output[] = array(
                'date' => date("d-m-Y", strtotime($row['date'])),
                'count' => $row['no']
            );

        }
    }
    else{$output="NO new data for current month";}
        
        echo json_encode($output);

?>