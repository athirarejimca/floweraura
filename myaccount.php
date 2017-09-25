<?php
include 'connection.php';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - My Account</title>
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
        <li class="selected"><a href="myaccount.php">my accout</a></li>
        <li><a href="register.php">register</a></li>
        <li><a href="details.php">prices</a></li>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>My account</div>
      <div class="feat_prod_box_details">
        <p class="details"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
        <div class="contact_form">
          <div class="form_subtitle">login into your account</div>
          <form name="register" href="#" method="post" action="logconn.php">
            <div class="form_row">
              <label class="contact"><strong>Username:</strong></label>
              <input type="text" name="uname" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Password:</strong></label>
              <input type="password" name="pwd" class="contact_input" />
            </div>
            <div class="form_row">
              <div class="terms">
                <input type="checkbox" name="terms" />
                Remember me </div>
            </div>
            <div class="form_row">
              <input type="submit" class="register" value="login" name="submit" />
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
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" /></span>Categories</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
        </ul>
        <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" /></span>Partners</div>
        <ul class="list">
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
          <li><a href="#">flower gifts</a></li>
          <li><a href="#">specials</a></li>
          <li><a href="#">hollidays gifts</a></li>
          <li><a href="#">accesories</a></li>
        </ul>
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

