<?php 

$conn=mysqli_connect("localhost","root","","eventdb");
$name=$_POST['Name'];
$mobileno=$_POST['mobileNo'];
$address=$_POST['Address'];
$email=$_POST['emailId'];
$dob=$_POST['dob'];
$event=$_POST['optradio'];
$food=$_POST['check'];
$chk="";
foreach($food as $ch)
{
	$chk .= $ch.",";
}
$budget=$_POST['Budget'];



$sql=mysqli_query($conn,"INSERT INTO users (name,mobileno,address,dob,eventtype,foodtype,budget,email)values('$name','$mobileno','$address','$dob','$event','$chk','$budget','$email')");
if($sql)
{
	echo "<div class='alert alert-success'><strong>Sucess: </strong>New user has been registerd!</div>";
}else
{
	echo mysqli_error($conn);
}




?>