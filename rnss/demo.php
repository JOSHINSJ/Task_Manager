 <?php
                    $con=mysqli_connect("localhost","root","","task_manager");
                    if($con)
                          {
                            echo "connect";

                          }
                          
                          
                        $sql="SELECT SUM(stock_details) AS total FROM `tm_pa_purchase_order` WHERE 1";
                        $task=mysqli_query($con,$sql);
                         while ($result=mysqli_fetch_assoc($task)) {
                       echo "".$result['total']."";
                       
                      }
                       
                            
?>
                          