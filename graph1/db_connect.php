<?php

$con = mysqli_connect("localhost", "root", "", "task_manager1");
if($con)
{
  //echo "connected";
}
else
{
  echo "not connecting";
}

?>