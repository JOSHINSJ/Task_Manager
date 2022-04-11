<?php include "db_connect.php"; ?>

<?php
    $sql ="SELECT *, COUNT(*) AS no FROM tm_pa_request WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE()) GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($res))
        {
            $output[] = array(
                'date' => date("d-m-Y", strtotime($row['date'])),
                'count' => $row['no']
            );

        }   
        echo json_encode($output);

?>