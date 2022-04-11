<?php
$con=mysqli_connect("localhost","root","","task_manager1");
if($con)
{
  echo "";
}

?>  

<html>
<body>
  <style>

body {font-family: Arial, Helvetica, sans-serif;
background-image: url('grn1.jpg'); }</style>
	<center>
<form action="grn_report.php" method="POST">
  <label for="fname">GOODS RECEIVED NOTE:</label>
  <div class="form-group">
                      <label>GRN_ID</label>
                      <select class="form-control select2bs4" name="id" id="id" style="width: 10%; ">
                       <!-- <option selected="selected"></option> -->
                      <?php
                        $query1 = "SELECT `id` FROM `tm_pa_grn` ORDER BY `id` ASC";
                        $sql="SELECT * FROM `tm_pa_grn` WHERE id='$id'";
                        $res1 = mysqli_query($con,$query1); 
                        while($row1 = mysqli_fetch_assoc($res1)){
                        echo "<option>".$row1['id']."</option>";
                        }

                      ?>
                      </select>
                    </div>  	
  
  <input type="submit" value="Submit" name="btnsave">
</form>
</center>




