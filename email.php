<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');

$Username = $_POST['fname'];
$Email = $_POST['femail'];
$Password = $_POST['fpass'];

$sql = "INSERT INTO `login` (`Username`, `Email`, `Password`) VALUES ('$Username','$Email', '$Password')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
?>