<?php 
$con=mysqli_connect('localhost','root','','infodb');
if (!$con) {
	die("Connection failed: " . $conn->connect_error);
}
$comp=$_POST['comp'];
$prod=$_POST['product'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$quant=$_POST['quantity'];
$cost=$_POST['cost'];
$delivery=$_POST['delivery'];

$var="INSERT into collection (company_name,product_name,email_id,phone,quantity,cost,delivery_time) values('$comp','$prod','$email','$phone','$quant','$cost','$delivery')";
if (mysqli_query($con, $var)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $var . "<br>" . mysqli_error($con);
}
?>