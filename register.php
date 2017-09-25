<?php
include 'connection.php';
if(isset($_POST['submit'])){
$a=$_POST['name'];
$b=$_POST['address'];
$f=$_POST['phone'];
$g=$_POST['email'];
$h=$_POST['username'];
$i=$_POST['password'];
$stz="0";

$sql="INSERT INTO `registration`(`name`, `address`, `phone`, `email`, `username`, `password`) VALUES('$a','$b','$f','$g','$h','$i')";
       $result=mysqli_query($con,$sql);
$qury1="INSERT INTO `login`(`user_name`, `password`, `reg_id`) 
 SELECT `username`, `password`,`id` FROM `registration` WHERE `password`= '$i' ";
 $b=mysqli_query($con,$qury1);

$ry2="UPDATE `login` SET `status`='$stz' WHERE `password`= '$i' ";
$c=mysqli_query($con,$ry2);
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.gif" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="about.php">about us</a></li>
        <li><a href="category.php">flowers</a></li>
        <li><a href="myaccount.php">my account</a></li>
        <li class="selected"><a href="register.php">register</a></li>
       <li><a href="contact.php">contact</a></li>
      </ul>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Register</div>
      <div class="feat_prod_box_details">
        <p class="details"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
        <div class="contact_form">
          <div class="form_subtitle">create new account</div>
          <form name="register" method="post" href="#">
           <div class="form_row">
              <label class="contact"><strong>Name:</strong></label>
              <input type="text" name="name" class="contact_input" required/>
            </div>
            <div class="form_row">
			  <label class="contact"><strong>Address:</strong></label>
            <textarea class="contact_textarea" name="address" required></textarea>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Phone:</strong></label>
              <input type="text" name="phone" class="contact_input" required/> 
            </div>
             <div class="form_row">
              <label class="contact"><strong>Email:</strong></label>
              <input type="text"  name="email" class="contact_input" required/>
            </div>
             <div class="form_row">
              <label class="contact"><strong>Username:</strong></label>
              <input type="text" name="username" class="contact_input" required/>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Password:</strong></label>
              <input type="password" name="password" class="contact_input" required/>
            </div>
            
            <div class="form_row">
              <input type="submit" name="submit" class="register" value="Register" />
            </div>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      
     
      <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="images/about.gif" alt="" class="right" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" /></span>Promotions</div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb1.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb2.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">product name</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb3.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
    
    </div>
    <!--end of right content-->
     <div class="clear"></div>
  </div>
  <!--end of center content-->
  <div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" /><br />
    <a href="http://csscreme.com"><img src="images/csscreme.gif" alt="" border="0" /></a></div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about us</a>  <a href="#">contact us</a> </div>
  </div>
</div>
</body>
</html>

