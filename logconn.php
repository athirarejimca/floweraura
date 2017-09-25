<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["uname"];
$b=$_POST["pwd"];
}
$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['user_id'];
	?>

	<?php
	if($a== $row['user_name']&& $b== $row['password'])
	{
	 if($a==  $row['user_name']&& $b== $row['password']&& $row['user_type']== 'user')
		{
		 $_SESSION["user_name"]=$a;
		 $_SESSION["password"]=$b;
		 header('location:about.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE user_id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
        }
		else
	    {
		 echo "login is incorrect";
	    }
	if($a==  $row['user_name']&& $b==$row['password']&& $row['user_type']=='admin')
	{
         $_SESSION["user_name"]=$a;
		 $_SESSION["password"]=$b;
		 header('location:about.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE user_id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	}
		 else
	     {
		  echo "login is incorrect";
	     }
	}

	
	else
	{
     echo "password is incorrect";
	//echo <script> alert("invalid username and password") </script>;
		header('location:myaccount.php');
	}
	?>

<?php

}
?>
