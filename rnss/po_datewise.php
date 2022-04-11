<?php include "db_connect.php"; ?>

<?php
if (isset($_REQUEST['request_date'])) 
{
    $start = $_POST["start_date"];
    $end = $_POST["end_date"];
    $id=$_POST["supplier"];
    if($id=="All")
    {
        $query = "SELECT *, COUNT(*) AS no  FROM tm_pa_purchase_order WHERE date BETWEEN '$start' and '$end' GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    } 
    else
    {
        $query = "SELECT *, COUNT(*) AS no  FROM tm_pa_purchase_order WHERE date BETWEEN '$start' and '$end'AND  `supplier`= '$id' GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    }
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}



// 7 Days
if (isset($_REQUEST['request_seven_days'])) 
{
   
        $query = "SELECT *, COUNT(*) AS no FROM tm_pa_purchase_order WHERE date < now() - INTERVAL 1 DAY AND date > now() - INTERVAL 8 DAY GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}

// 15 Days
if (isset($_REQUEST['request_fifteen_days'])) 
{
   
        $query = "SELECT *, COUNT(*) AS no FROM tm_pa_purchase_order WHERE date < now() - INTERVAL 1 DAY AND date > now() - INTERVAL 16 DAY GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}

// 1 Month
if (isset($_REQUEST['request_one_month'])) 
{
   
        $query = "SELECT *, COUNT(*) AS no  FROM tm_pa_purchase_order WHERE MONTH(date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}

// 3 Month
if (isset($_REQUEST['request_three_month'])) 
{
   
        $query = "SELECT *, COUNT(*) AS no  FROM tm_pa_purchase_order WHERE date < now() - INTERVAL 1 MONTH AND date > now() - INTERVAL 4 MONTH GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}

// 6 Month
if (isset($_REQUEST['request_six_month'])) 
{
   
        $query = "SELECT *, COUNT(*) AS no  FROM tm_pa_purchase_order WHERE date < now() - INTERVAL 1 MONTH AND date > now() - INTERVAL 7 MONTH GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}

// Current Year
if (isset($_REQUEST['request_current_year'])) 
{
   
        $query = "SELECT *, COUNT(*) AS no FROM tm_pa_purchase_order WHERE YEAR(date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}

// Last Year
if (isset($_REQUEST['request_last_year'])) 
{
   
        $query = "SELECT *, COUNT(*) AS no FROM tm_pa_purchase_order WHERE YEAR(date) = YEAR(CURRENT_DATE - INTERVAL 1 YEAR) GROUP BY date HAVING COUNT(*) > 0";
        $res = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_assoc($res))
    {
        $output[] = array(
        'date' => date("d-m-Y", strtotime($row['date'])),
        'count' => $row['no']
        );
    }
    echo json_encode($output);
}

?>