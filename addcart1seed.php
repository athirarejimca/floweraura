<?php
 include_once "connection.php";
 session_start();
 if(!(isset($_SESSION['user_name'])))
 {
 //header('location:index.php');
 }
 $usereid=$_SESSION['user_id'];
 //echo $usereid;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>
.prodbg1{
width:100%;
height:700px;

position:relative;
text-align:center;

}
table {
	  
    font-size:15px;
    border-collapse: collapse;
    width: 100%;
	
}

th, td {
	border: 1px;
    text-align: left;
    padding: 25px;
}


.f2 td{
	font-size:20px;

}
.f1{
float: left; 
max-width: 160px; 
 margin:20px; 
 padding: 3em;
}
.f2{
float:left; 
 padding: 2em; 
 width:500px;
 overflow: hidden;
 margin-top:90px;
 margin-left:30px;
 
 }
 
 .f1 img{
	 width:250px;
	 height:250px;
 border-radius:30px;
 }

</style>
<title>Floweraura</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function fun1()
{
	var am=document.getElementById("price").value;
	var q=document.getElementById("qty").value;
	var total= am*q;
	document.getElementById("tt").value=total;

}
</script>
</head>
<body>
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
       <li><a href="userhome.php">Home</a></li>
		   <li><a href="userprofile.php">Profile</a></li>
        <li class="selected"><a href="moredetails.php">Seeds</a></li>
		<li ><a href="wish.php">Wishlist</a></li>
		<li><a href="newcart.php">Cart</a></li>
       <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>

       <div class="prodbg1"> 
	   <?php
						if(isset($_POST['sub']))
						{
                        $id=$_POST['id1'];
					
                        $sql1=mysqli_query($con,"SELECT * FROM products p,product pd where p.pid=pd.pid and p.id='$id'");
	 					$t=mysqli_fetch_array($sql1);
						
?>     
				
				<!--<div class="d1">
	 <div class="d2"style="border:0">-->



           
	<form id="form2" name="form2" method="post" action="#">
	<div class="f1">
	<img src="<?php echo $t['product_img_name']?>" width="300px" height="200px" /></div>
<br><br><br> 
		<div class="f2">
       <table>
<tr></tr>
                            <tr>
                                <td>Name</td><td>:</td><td><input type="text" name="editgender" value="<?php echo $t['pname']; ?>" required readonly="readonly"/></td>
                            </tr>
                            <tr>
                               <td>Description</td> <td>:</td><td><input type="text" name="editage" value="<?php echo $t['product_desc']; ?>" required readonly="readonly"/></td>
                            </tr>
                            <tr>
                               <td>Price</td><td>:</td> <td><input type="text" id="price" name="editprice" value="<?php echo $t['price']; ?>" required readonly="readonly"/></td>
                            </tr>
							<tr>
                               <td>Quantity</td> <td>:</td><td><input type="text" id="qty" name="qty" onchange="qn()" value="" required /></td>
                            </tr>
							<tr>
                               <td>Total Price</td> <td>:</td><td><input type="text" id="tt" name="tprice" value="" onblur="fun1()"  onchange="qt()" /></td>
                            </tr>
                            <tr><td></td><td colspan="2" align="center">	
                            <input type="hidden" name="id" value="<?php echo $t['pid']?>" />
							<input type="hidden" name="id2" value="<?php echo $id?>" />
							 
                            <input type="submit" name="submit" id="submit" value="Add To Cart" onclick="" ></td></tr></form>
							
                    <?php
							?>
							</table></div>
							
							
							<?php 
						}
						
if(isset($_POST['submit']))
{
$id=$_POST['id2'];
 $p=$_POST['tprice'];
  $q=$_POST['qty'];
  $r=$_POST['id'];
  $s=$_SESSION['user_id'];
 $date=date("Y/m/d");
// echo $s;
  //echo"$quantity";
//echo"$usr";
$sql2=mysqli_query($con,"SELECT * FROM products p,product pd where p.pid=pd.pid and p.id=$id;");
$t1=mysqli_fetch_array($sql2);
$q1=$t1['product_qty'];
//echo $q1;
if($q1<$q)
{
?><script>alert("Out of stock")</script>
<script>window.location.href="userviewseed.php"</script>
<?php

}
else
{
$S=$q1-$q;
//echo $S;
$sql11="update products set product_qty='$S' where id='$id'";
$result11=mysqli_query($con,$sql11) or die(mysqli_error($con));

//$sql="INSERT INTO `cart`(`sid`, `qty`, `tot`, `rid`,`date`) VALUES  ('$r','$q','$p','$s','$date')";
$sql="INSERT INTO `cart`(`p_id`, `quantity1`, `total`, `regid`,`date`) VALUES  ('$r','$q','$p','$s','$date')";
?>
<?php
echo '<script type="text/javascript">'; 
echo 'alert("successfully added to cart");'; 
echo 'window.location.href = "newcart.php";';
echo '</script>';
//<script>alert("successfully added to cart")

?>
<?php
//echo $sql;
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
}
}
?>
      
       </div>
     
     <div class="footer">
    <div class="left_footer"><img src="images/footer_logo.gif" alt="" /><br />
    <a href="http://csscreme.com"><img src="images/csscreme.gif" alt="" border="0" /></a></div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about us</a>  <a href="#">contact us</a> </div>
  </div>
 </div>
<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/validation.js"></script>
</body>
</html>
