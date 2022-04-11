<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 
body {font-family: Arial, Helvetica, sans-serif;
background-image: url('cn.jpg');}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<a href="purchase.php">Back</a>
<body>
<button class="open-button" onclick="openForm()">Contact Us</button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container" method="post">
    <h1>Login</h1>

    <label for="Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="name" required>
    
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lastname" required>

    <label for="add"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="add" required>
   
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    
    <label for="psw"><b>Contact Us</b></label>
    <input type="text" placeholder="Enter contact number" name="psw" required>
<br>
    <button type="submit" class="btn" name="btnsubmit">Submit</button>
    <button type="button" class="btn cancel"  onclick="closeForm()">Close</button>
  </form>
</div>
</style>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<?php
$conn = mysqli_connect("localhost", "root", "", "task_manager1");
if($conn)
{
  echo "";
}
else
{
  echo "not connecting";
}
?>

<!-- GRN INSERT -->

<?php

if(isset($_POST["btnsubmit"]))
  {   
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $add=$_POST['add'];
    $email=$_POST['email'];
    $psw=$_POST['psw'];
     

 if(mysqli_query($conn,"INSERT INTO contact (`fname`, `lname`, `address`, `email`, `contact`) VALUES ('$name','$lastname','$add','$email','$psw')")){
        ?>
        <script>
         alert("Information Saved");
                window.location.replace("contact.php");
          
        </script>
      <?php 
    }
else{
   ?>
        <script>
          alert("Something went wrong");
                   window.location.replace("contact.php");
        </script>
      <?php  
}
  }


  ?>
</body>
</html>
