<?php
$con = mysqli_connect("localhost", "root", "", "task_manager1");
if(isset($_POST['view'])){
    if($_POST["view"] != '')
    {
        $update_query = "UPDATE tm_sa_enquiry SET status = 1 WHERE status=0";
        mysqli_query($con, $update_query);
     }
     $query = "SELECT * FROM tm_sa_enquiry ORDER BY cust_ref_no DESC LIMIT 5";
     $result = mysqli_query($con, $query);
     $output = '';

     if(mysqli_num_rows($result) > 0)
     {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
            <li>
            <a href="">
            <strong>'.$row["product_name"].'</strong><br />
            </a>
            </li>
            ';
          }
     }
     else{
        $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
    }

    $status_query = "SELECT * FROM tm_sa_enquiry WHERE status = 0";
    $result_query = mysqli_query($con, $status_query);
    $count = mysqli_num_rows($result_query);

    $data = array(
        'notification' => $output,
        'unseen_notification' => $count
     );

     echo json_encode($data);


    
}

    
          


?>
