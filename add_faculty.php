<?php
include('config.php');
error_reporting(0);
$name = $_POST["faculty_name"];
$mobile = $_POST["faculty_mobile"];
$subjects = implode(',', $_POST["faculty_subjects"]);

if($name == "") { echo '<i style="color:red;">Please Enter Name</i>'; }
else if($mobile == "") { echo '<i style="color:red;">Please Enter Mobile Number</i>'; }
else if(strlen($mobile) > 10 || strlen($mobile) < 10) { echo '<i style="color:red;">Invalid Mobile Number</i>'; }
else if($subjects == "") { echo '<i style="color:red;">Please Select subjects</i>'; }
else
{
	$query = "INSERT INTO `faculty`(`name`, `mobile`, `subjects`) 
	VALUES ('$name','$mobile','$subjects')";
	if(mysqli_query($db,$query))
	{
		echo '<i style="color:green;">Faculty Added Successfully</i>';
	}
	else
	{
		echo '<i style="color:red;">Some Error Occurred. Please Try with other values</i>';
	}
}

?>