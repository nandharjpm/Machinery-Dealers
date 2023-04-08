<?php 
$con=mysqli_connect('localhost','root','','newdata');
if (!$con) {
	die("Connection failed: " . $conn->connect_error);
}
$comp=$_POST['buy'];
$prod=$_POST['product'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$quant=$_POST['quantity'];


$var="INSERT into name (Buyer_Name,Product_Name,Email_ID,Phone_Number,Quantity) values('$comp','$prod','$email','$phone','$quant')";
if (mysqli_query($con, $var)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $var . "<br>" . mysqli_error($con);
}
?>