<?php
 include_once "connection.php";
//$obj=new DbConnection;
 session_start();
if(!(isset($_SESSION['user_name'])))
 {
 header('location:index.php');
 }
 $usereid=$_SESSION['user_id'];
if(isset($_POST['submit'])){
$n=$_POST['fname'];
$t=$_POST['type'];
$c=$_POST['colour'];
$q=$_POST['quantity'];
$d=$_POST['description'];
$o=$_POST['occasion'];


if ($_FILES['photo']["error"] > 0)
    {
    echo "Return Code: " . $_FILES['photo']["error"] . "<br>";
	
    }
  else
    {
		
		$uploaddir = 'images/products/'; 
		
		
    $file = basename($_FILES['photo']['name']);

     if($_FILES['photo']['name']) {
      $file = preg_replace('/\s+/', '_', $file);
      $rand = rand(0000,9999);
	  

      if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) { 

        } else
		 {
            echo "error";
        }
 $image1= 'images/products/'. $rand . $file;

	
    }
		
  }
  
  

$sql1="INSERT INTO `flower`( `pid`, `typeid`, `colorid`, `occasionid`, `description`, `photo`, `quantity`) VALUES('$n','$t','$c','$o','$d','$image1','$q')";
					if (mysqli_query($con,$sql1) > 0){
						
							echo "<script> alert('Successfully Added'); </script>";
						?>
							<script>
									window.location="admin_add_fdetails.php";
							</script>
						<?php
						}
						
						else{
								echo "<script> alert ('Unsuccessfull !'); </script>";
							}
						}
    ?>
	 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
    function fileCheck(obj) {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1)
                alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
    }
</script>
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
         <li class="selected"><a href="admin_add_fdetails.php">Add flower</a></li>
		   <li><a href="logout.php">logout</a></li>
      </ul>
    </div>
  </div>
   <div class="center1_content">
   <!-- <div class="left_content">-->
     
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>FLower Details</div>
     <div class="new_products">
	   <div class="prodbg1"> 
	   <div class="contact2_form">
          <div class="form_subtitle">Add Flower Details</div>
          <form name="addflower" method="post"  align="center" enCtype="multipart/form-data">
		  <div class="form2_row">
              <label class="contact"><strong>Item Name:</strong></label>
			  <select name="fname" class="contact_input" required>
              <option value="">---select category---</option>
		   <?php
$sql="select * from product where status='flower'";
$execute=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($execute)){
$id=$row["pid"];
$name=$row["pname"];
echo"<option value='$id'>$name</option>";
}
?>
                </select> 
            </div>
          
          
			 <div class="form2_row">
              <label class="contact"><strong>Item Type:</strong></label>
			  <select name="type" class="contact_input" required>
              <option value="">---select category---</option>
		   <?php
$sql="select * from flowertype";
$execute=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($execute)){
$id=$row["typeid"];
$name=$row["typename"];
echo"<option value='$id'>$name</option>";
}
?>
                </select> 
            </div>
		      <div class="form2_row">
              <label class="contact"><strong>Colour:</strong></label>
			  <select name="colour" class="contact_input" required>
              <option value="">---select category---</option>
		   <?php
$sql="select * from colour";
$execute=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($execute)){
$id=$row["colourid"];
$name=$row["colourname"];
echo"<option value='$id'>$name</option>";
}
?>
                </select> 
            </div>
             <div class="form2_row">
              <label class="contact"><strong>Item Image:</strong></label>
              <input type="file"  name="photo" onChange="fileCheck(this);" accept="image/*" class="contact_input" >
            </div>
			 <!--<div class="form2_row">
              <label class="contact"><strong>Item Image2:</strong></label>
              <input type="file"  name="photo1" onChange="readthisURL" accept="image/*" class="contact_input" >
            </div>-->
			<div class="form2_row">
              <label class="contact"><strong>quantity:</strong></label>
              <input type="text" name="quantity" class="contact_input" id="quantity" onchange="qn()" required/>
            </div>
			 <div class="form_row">
			  <label class="contact"><strong>Description:</strong></label>
            <textarea class="contact_textarea" id="description" name="description"  onchange="des()" required></textarea>
            </div>
            <div class="form2_row">
              <label class="contact"><strong>Occasion:</strong></label>
              <select name="occasion" class="contact_input" required>
              <option value="" class="contact_input">---select category---</option>
			  <?php
$sql="select * from occasion";
$execute=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($execute)){
$id=$row["occasionid"];
$name=$row["occasion"];
echo"<option value='$id'>$name</option>";
}
?>
                </select> 
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
 <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/validation1.js"></script>
</body>
</html>

