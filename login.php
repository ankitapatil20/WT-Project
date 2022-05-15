<?php
$link=mysqli_connect("localhost","root","","mini project");
if($link===false)
{
die("Error:Could not connect.".mysqli_connect_error());
}
$id=mysqli_real_escape_string($link,$_REQUEST['Id_No']);
$ps=mysqli_real_escape_string($link,$_REQUEST['Password']);

$sql="INSERT INTO login(Id_no, password) VALUES('$id','$ps')";
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
