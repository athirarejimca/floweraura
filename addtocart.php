<?php
$id=$_REQUEST['pid'];
session_start();
include 'connection.php';
$usereid=$_SESSION['user_id'];
 $results=mysqli_query($con,"select * from wish w,product p where w.prodid =p.pid and userid='$usereid' and w.prodid='$id'");
  
  while($row6=mysqli_fetch_array($results))
  {
	   $qd=$row6['price'];
	
	  
  $d=date("Y/m/d");
$total=$qd*1;
$sql="INSERT INTO `cart`( `p_id`, `quantity1` ,`total`,`regid`,`date`)VALUES ('$id',1,'$total','$usereid','$d')";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
$sql1="DELETE FROM wish WHERE prodid='$id'";
$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
echo '<script type="text/javascript">'; 
echo 'alert("Successfully Added To Cart");'; 
echo 'window.location.href = "newcart.php";';
echo '</script>';
 
  }
?>