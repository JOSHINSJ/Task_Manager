<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    
    
    <title>Kisan</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php include "assets/csslink.php"?>
      <?php include "assets/jslink.php"?>
    <link rel="stylesheet" type="text/css" href="font.css">
  </head>
  <body  style="background: #232427" data-spy="scroll" data-target=".navbar" data-offset="50">
    
    <div class="main">
      <div class="mainbg">
        
        <div>
          <section>
            <nav class="navbar navbar-expand-lg fixed-top">
              <a class="navbar-brand" href="#">Digital<span class="text-warning" style="font-size:1.5em;">F</span>arming</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#service">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact-Us</a>
                  </li>
                  <li class="nav-item" >
                    <a class=" nav-link text-light font-weight-bold" data-toggle="modal" data-target="#myModal">
                      Signup &nbsp<i class="fa fa-user text-warning"></i>
                    </a>
                  </li>
                  <li class="nav-item" >
                    <a  class="nav-link text-light font-weight-bold" data-toggle="modal" data-target="#myModal1">
                    Login &nbsp<i class="fa fa-user text-light"></i></a>
                  </li>
                  
                </ul>
              </div>
            </nav>
          </section>
        </div>
        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog ">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">D-FarmRegistration</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <div class="buyer1">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <form action="user_registration.php" id="mform" method="POST">
                          <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control p-3 mb-2" required>
                          <div class="error11 text-danger"></div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                          <input type="text" name="lname" id="lname" placeholder=" Last Name" class="form-control p-3 mb-2"required>
                          <div class="error12 text-danger"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-lg-6">
                          <input type="text" name="mobile" id="mobile" placeholder=" Mobile Number" class="form-control p-3 mb-2" required>
                          <div class="error13 text-danger"></div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                          <input type="email" name="email" id="email" placeholder=" Email" class="form-control p-3 mb-2" required>
                          <div class="error14 text-danger" ></div>
                        </div>
                      </div>
                      <div class="">
                        <input type="password" name="password" id="password" placeholder="password" class="form-control mb-2 p-3"required>
                        <div class="error15 text-danger"></div>
                      </div>
                      <div class="">
                        <textarea  name="address" id="address" class="form-control p-2 mb-2" placeholder="address" required></textarea>
                        <div class="error16 text-danger"></div>
                      </div>
                      <div class="error text-danger"></div>
                    </div>
                  </form>
                  <div class="fb">
                    <div class="row">
                      <div class="col-md-2 col-lg-2">
                      </div>
                    </div>
                  </div>
                </div>
               
                <!-- Modal footer -->
                <div class="modal-footer">
                  <!-- <button type="button" id="button1" name="login" class="btn btn-success button1">Submit1</button> -->
                  <button type="button" id="button2" name="login" class="btn btn-warning button2">Register</button>
                  <button type="button" class="btn btn-danger d-inline" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>
          <section>
            
            <!-- Button to Open the Modal -->
            <!-- The Modal -->
            <div class="modal" id="myModal1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">D-Farm Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <div class="card-body">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="mobile" id="mobile1" placeholder="Enter Username as mobile number" class="form-control" required="">
                        <span class="errorl1 text-danger"></span>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password1" placeholder="Enter password" class="form-control" required>
                        <span class="errorl2 text-danger"></span>
                      </div>
                      <span class="errorl text-danger"></span>
                      <a href="forgot.php" id="forgot">Forgot Passowrd??</a>
                    </div>
                  </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <div class="bg-transparent text-center">
                    <button type="button" id="login" name="login" class="btn btn-primary login btn-block">Login</button>
                  </div>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

              </div>
                  <div class="msg"></div>
            </div>
          </div>

        </section>
        <div id="home" class="caraouselbg">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active" id="demo" >
                <img src="img/k23.jpeg" class="img02" alt="Los Angeles"  style="object-fit: cover" width="1500px" height="720px" >
                <div class="carousel-caption">
                  <h1 class="font-weight-bold" style="font-size: 4em;">Digital Farming</h1>
                  <p style="font-size: 2em;">Now Made its Easier</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/t2.jpeg" alt="Chicago" style="object-fit: cover" width="1500px" height="720px" >
                <div class="carousel-caption">
                  <h1 class="font-weight-bold"style="font-size: 4em;">Machine</h1>
                  <p style="font-size: 2em;">The Machines Makes farming Easy </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/k28.jpeg" alt="New York" style="object-fit: cover" width="1500px" height="720px">
                <div class="carousel-caption">
                  <h1 class="font-weight-bold"style="font-size: 4em;">DigiMarket</h1>
                  <p style="font-size: 2em;">Brings Million of Smiles</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </section>
    </div>
  </div>


  <!-- --------------------------services-------------------------------- -->
  
  <section>
    <div class="container">
      <div class="service  mt-3" id="service">
        <div class="serviceheader">
          <h1>Services</h1>
          <p>Service That help To Grow More</p>
        </div>
        <div class="servicebody">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-3 ">
              <div class="containers">
                
                <div class="cards">
                  <div class="card-body">
                    <div class="content">
                      <h2><i class="fa fa-ticket"></i></h2>
                      <h3>Schemes</h3>
                      <p>The Ministries of the Government of India have come up with various government programs called schemes(Yojana) from time to time. </p>
                      
                      <a class="sb"href="#">Know More</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3  ">
              <div class="containers">
                <div class="cards">
                 <div class="card-body ">
                          <div class="content">
                            <h2><i class="fa fa-bug"></i></h2>
                            <h3>Add Machine</h3>
                            <p>Farmer can rent their machines  and they can choose valid rent price for particular time limit. </p>
                            
                            <a class="pb"href="#">Know More</a>
                            
                          </div>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3 ">
              <div class="containers">
                <div class="cards">
                  
                  <div class="card-body ">
                    <div class="content">
                      <h2><i class="fa fa-leaf"></i></h2>
                      <h3>Product</h3>
                      <p>Farmer can add their product and Choose price their own and also can buy the product easie on this </p>
                      
                      <a class="cb" href="addproduct.php">Know More</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3 ">
              <div class="containers">
                <div class="cards">
                  
                  <div class="card-body">
                    <div class="content">
                      <h2><i class="fa fa-shopping-cart"></i></h2>
                      <h3>E-commerce</h3>
                      <p>E-commerce in agriculture new buisness model for smallholders, where farmers can sell thier products and can also buy other products </p>
                      <a class="eb"href="#">Know More</a>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3 ">
              <div class="containers">
                <div class="cards">
                  <div class="card-body ">
                    <div class="content" id="machine">
                      <h2><i class="fa fa-gears"></i></h2>
                      <h3>Machinary</h3>
                      <p>Machinary that help for agriculture where farmer can book required machines for their from native places at best rental prices and also can add machines  </p>
                      
                      <a class="mb" href="">Know More</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3 ">
              <div class="containers">
                <div class="cards">
                  
                  <div class="card-body">
                    <div class="content">
                      <h2><i class="fa fa-mixcloud"></i></h2>
                      <h3>Weather</h3>
                      <p>Weather is the State of atmosphere,describing for example the degree to which it is hot or cold,wet or dry,calm etc. </p>
                      
                      <a class="wb" href="#">Know More</a>
                      
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </section>
      <section class="contactsection">
        <div class="contact">
          <div class="contactheader">
            <h2>Contact Us</h2>
            <p>Please Provide your Valuable feedback</p>
          </div>
          <div class="contactmain" id="contact">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="formhead">
                    <h2>Feedback</h2>
                    <p>Your feedback is most worth</p>
                  </div>
                  <div class="contactform">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control mb-2">
                      <input type="text" name="phone" class="form-control mb-2">
                      <textarea name="response" class="form-control mb-2"></textarea>
                      <a class="fb" href="#">submit</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4" id="about">
                  <div class="addhead">
                    <h2>Address</h2>
                  </div>
                  <div class="addr mt-4">
                    <ul>
                      <li class="one mb-2">Belagavi-59008</li>
                      <li class="two mb-2">Opp Karnataka Bank,Belagavi</li>
                      <li class="three mb-2">Near Kls College,Udyambagh</li>
                      <li class="four mb-2">Flat No:0158</li>
                      <li class="five">Main Road Belagavi</li>
                    </ul>
                  </div>
                  
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="container">
                    <div class="map">
                      <iframe align="center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15354.958214137767!2d74.47955222143582!3d15.817681224586625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf65d02fac115f%3A0xd5f8340d8cd5beab!2sUdyambag%20Industrial%20Area%2C%20Udyambag%2C%20Belgaum%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1603972613159!5m2!1sen!2sin" width="530" height="350" frameborder="0" style="border:0; padding: 10px; box-shadow: 0 0 0px 1px #999;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
if (!isset($_SESSION['mobile'])) {
  ?>
<script type="text/javascript">
  swal("Required","Login First To Explore All Features","warning");
</script>

  <?php
}
?>
      <section>
        <div class="footer">
          <div class="footertext">
            <span class="rights ml-5">© 2020 Digital Farming Ltd. All rights reserved</span>
            <span class="design p-3 ml-5">© Designed By Pankaj & Vaibhav</span>
            <div class="iconfooter mt-1">
              <a href="https://www.facebook.com/pankaj.savantre.9"><i class="fa fa-facebook pr-3"></i></a>
              <a href=""><i class="fa fa-twitter pr-3"></i></a>
              <a href=""><i class="fa fa-instagram "></i></a>
              
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php include "assets/jslink.php"?>
</body>
</html>

<script type="text/javascript">




$(document).ready(function(){
$('.sb').click(function(event) {
location.replace("scheme.php");
/* Act on the event */
});
$('.wb').click(function(event) {
location.replace("weather.php");
/* Act on the event */
});
$('.eb').click(function(event) {
location.replace("ecom.php");
/* Act on the event */
});

// =========================================================================================
var pat1=/^[a-zA-Z. ]*$/;
var pat2=/^[0-9]{10}$/;
var pat3=/^[0-9]*$/;

var pat1=/^[a-zA-Z. ]*$/;
var pat2=/^[0-9]{10}$/;
var pat3=/^[0-9]*$/;
var pat4=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/;
$('.button2').click(function(event) {
/* Act on the event */
var fname=$('#fname').val();
var lname=$('#lname').val();
var mobile=$('#mobile').val();
var email=$('#email').val();
var password=$('#password').val();
var address=$('#address').val();
if (fname=="" && lname=="" && mobile=="" && email=="" && password=="" && address=="" ) {
$('#fname').addClass('is-invalid');
$('#lname').addClass('is-invalid');
$('#mobile').addClass('is-invalid');
$('#email').addClass('is-invalid');
$('#password').addClass('is-invalid');
$('#address').addClass('is-invalid');
$('.error').html('Please fill the all the fields');
return false;
}else{
$('.error').html('');
if (fname=="") {
$('.fname').addClass('is-invalid');
$('.error11').html('Please enter  first name');
return false;
}else{

if (!pat1.test(fname)) {
  $('.error11').html("Enter valid name");
  return false;
}else{
$('.fname').removeClass('is-invalid');
$('.error11').html('');
}

}
if (lname=="") {
$('.lname').addClass('is-invalid');
$('.error12').html('Please enter last name');
return false;
}else{
if (!pat1.test(lname)) {
$('.error12').html("Enter valid name");
return false;
}else{
$('.lname').removeClass('is-invalid');
$('.error12').html('');
}
}
if (mobile=="") {
$('.mobile').addClass('is-invalid');
$('.error13').html('Please enter mobile number');
return false;
}else{
if (!pat2.test(mobile)) {
$('.error13').html("Enter valid Mobile number");
return false;
}else{
$('.mobile').removeClass('is-invalid');
$('.error13').html('');
}
}

if (email=="") {
$('.email').addClass('is-invalid');
$('.error14').html('Please enter email ');
return false;
}else{
if (!pat4.test(email)) {
$('.error14').html("Enter valid email ");
return false;
}else{
$('.email').removeClass('is-invalid');
$('.error14').html('');
}
}
if (password=="") {
$('.password').addClass('is-invalid');
$('.error15').html('Please enter password');
return false;
}else{
if (!pat3.test(password)) {
$('.error15').html("enter valid password ");
return false;
}else{
$('.password').removeClass('is-invalid');
$('.error15').html('');
}
}
if (address=="") {
$('#address').addClass('is-invalid');
$('.error16').html('please fill field');
return false;
}
else{
$('#address').removeClass('is-invalid');
$('.error16').html('');
}

$.ajax({
url:"user_registration.php",
type:'POST',
data:{
login:1,
fname:fname,
lname:lname,
mobile:mobile,
email:email,
password:password,
address:address
},
success:function(data){
if (data==1) {
swal("Sorry","Mobile Number is Already Exists","error");
}
if(data==2){
swal("Well Done","Registered Successfully","success");
setTimeout(function(){
window.location.replace("index.php");
},1200);
}
if(data==3){
swal("Sorry","Unable to Register","error");
}
}
});
}
});
$('#login').click(function() {
var mobile=$('#mobile1').val();
var password=$('#password1').val();
if (mobile=="" && password=="") {
$('#mobile1').addClass('is-invalid');
$('#password1').addClass('is-invalid');
$('.errorl').html('Please Fill All The Fields');
return false;

}else{
$('.errorl').html('');
if (mobile=="") {
$('#mobile1').addClass('is-invalid');
$('.errorl1').html('Please Enter Username');
return false;
}else{
$('.errorl1').html('');
$('#mobile1').removeClass('is-invalid');
}
if (password=="") {
$('#password1').addClass('is-invalid');
$('.errorl2').html('Please Enter password');
return false;
}else{
$('.errorl2').html('');
$('#password1').removeClass('is-invalid');
}


$.ajax({
url:"userloginphp.php",
type:'post',
data:{
login:1,
mobile:mobile,
password:password
},
success:function(data){
if (data==1) {
$('.msg').html("<div class='alert alert-success text-success font-weight-bold text-center mt-3'>Login Successfull</div>").fadeOut(8000);
swal("successfull","Login success full","success");
setTimeout(function(){
window.location.replace("index1.php");
},1200);
}else{
$('.msg').html("<div class='alert alert-danger text-danger font-weight-bold text-center ml-auto mt-3'>Invalid Crediantials </div>").fadeOut(8000);
swal("Error","Unable To Login invalid Crediantials","error");
setTimeout(function(){

},1200);
}
}
});

}
});
});
</script>