<?php
$link=mysqli_connect("localhost","root","","mini project");
if($link===false)
{
die("Error:Could not connect.".mysqli_connect_error());
}
$fn=mysqli_real_escape_string($link,$_REQUEST['first_name']);
$ln=mysqli_real_escape_string($link,$_REQUEST['last_name']);
$em=mysqli_real_escape_string($link,$_REQUEST['email']);
$mn=mysqli_real_escape_string($link,$_REQUEST['mobile_no']);
$gd=mysqli_real_escape_string($link,$_REQUEST['gender']);
$dob=mysqli_real_escape_string($link,$_REQUEST['dob']);
$ad=mysqli_real_escape_string($link,$_REQUEST['address']);
$ct=mysqli_real_escape_string($link,$_REQUEST['city']);
$st=mysqli_real_escape_string($link,$_REQUEST['state']);
$cn=mysqli_real_escape_string($link,$_REQUEST['country']);
$sql="INSERT INTO registration(first_name,last_name,email,mobile_no,gender,dob,address,city,state,country)VALUES('$fn','$ln','$em','$mn','$gd','$dob','$ad','$ct','$st','$cn')";
if(mysqli_query($link,$sql))
{
echo"Records added successfully.";
}
else
{
echo"Error:Could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
