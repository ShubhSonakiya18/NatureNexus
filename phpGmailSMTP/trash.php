<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Complain</title>
  
</head>
<body>
    <div>
        <a href="http://localhost/EmailVerification/index.html"  class="fa fa-home"> Home </a>
    </div>
   <?php 
   $error ='';
   ?>
   <form method="post" action="confirmation_page.php" enctype="multipart/form-data">
   <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="contact-info">
                <img src="images.jfif" alt="image"/>
                <h2>Register Your Complain</h2>
                <h4>We would love to hear from you !</h4>
            </div>
        </div>
        <div class="col-md-9">
            <div class="contact-form">
                <div class="form-group">
                <div id="error"></div>
              <!-- <span style="color:red"><?php echo "<b>$msg</b>"?></span> -->
                  <label class="control-label col-sm-2" for="fname"> Name:</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="lname">Mobile:</label>
                  <div class="col-sm-10">          
                    <input type="number" class="form-control" id="mobile" placeholder="Enter Your Mobile Number" name="mobile"required min ="80000000" max="100000000000">
                  </div>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="email" placeholder="Enter Your email" name="email" value="<?php echo $_SESSION['email'];?>"> 
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="option">Category:</label>
                    <div class="col-sm-10">          
                        <input type="checkbox" name="wastetype[]" value="organic"> Organic
                        <input type="checkbox" name="wastetype[]" value="inorganic"> Inorganic
                        <input type="checkbox" name="wastetype[]" value="Household"> Household
                        <input type="checkbox" name="wastetype[]" value="mixed"id="mycheck" checked> All
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="lname">Location:</label>
                    <div class="col-sm-10">          
                       <select class="form-control" id="location" name="location"required>
                           <option class="form-control" >Noida</option>
                           <option class="form-control" >Greater Noida</option>
                           <option class="form-control" >Delhi</option>
                           <option class="form-control" >Gurgaon</option>
                           <option class="form-control" >Ghaziabad</option>
                       </select>
                    </div>
                  </div>
                <div class="form-group">
                  
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="locationdescription" placeholder="Enter Location details..." name="locationdescription" required></textarea>
                  </div>
                </div>8
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lname">Pictures:</label>
                    <div class="col-sm-10">          
                      <input type="file" class="form-control" id="file" name="file"required accept="image/*" capture="camera">
                    </div>
                  </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                   <input type='hidden' class="form-control" id="date" name="status" value="Pending">
                    <input type="hidden" class="form-control" id="date" name="date" value="<?php $timezone = date_default_timezone_set("Asia/Kathmandu");
                                                                                             echo  date("g:ia ,\n l jS F Y");?>">
                    <button type="submit" class="btn btn-default" name="submit" >Register</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
   </form>
</div>
<script type="text/javascript"  src="formValidation.js"></script>
</body>
</html>
