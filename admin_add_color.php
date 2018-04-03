
<?php
include 'connection.php';
if(isset($_POST['submit'])){
$c=$_POST['colour'];

$sql="INSERT INTO `colour`(`colourname`) VALUES('$c')";
					$result=mysqli_query($con,$sql);
					echo "<script>alert('Colour Added')</script>";
          
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.prodbg1{
width:100%;
height:700px;
position:relative;
text-align:center;}
</style>
<title>Floweraura</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href="adminhome.php">Back</a></li>
         <li class="selected"><a href="admin_add_color.php">Add Colour</a></li>
		   <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
  </div>
  <div class="center1_content">
   <!-- <div class="left_content">-->
     
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span> Details</div>
     <div class="new_products">
	   <div class="prodbg1"> 
	   <div class="contact2_form">
          <div class="form_subtitle">Add Colour Details</div>
          <form name="addflower" method="post"  align="center" href="#">
		  
           <div class="form2_row">
              <label class="contact"><strong>Colour:</strong></label>
              <input type="text" name="colour" class="contact_input"  pattern="^[a-zA-Z ]+$" title="Please enter alphabet only" required/>
            </div>
           
            
            <div class="form2_row">
              <input type="submit" name="submit" class="register" value="ADD" />
            </div>
          </form>
        </div>
     
      
    </div></div>
   
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

