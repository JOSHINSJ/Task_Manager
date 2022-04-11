<?php include "db_connect.php"; ?>

<?php
if (isset($_REQUEST['request_date'])) 
{
    $start = $_POST["start_date"];
    $end = $_POST["end_date"];
        $query = "SELECT *, COUNT(*) AS no  FROM tm_pa_request WHERE date BETWEEN '$start' and '$end' GROUP BY date HAVING COUNT(*) > 0";
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