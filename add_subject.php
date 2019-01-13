<?php
include('config.php');
$class = $_POST["subject_class"];
$code = $_POST["subject_code"];
$name = $_POST["subject_name"];

if($class == "0") { echo '<i style="color:red;">Please Select Class</i>'; }
else if($code == "") { echo '<i style="color:red;">Please Enter Subject COde</i>'; }
else if($name == "") { echo '<i style="color:red;">Please Enter Subject Name</i>'; }
else
{
	$query = "INSERT INTO `subjects`(`name`, `code`, `class`) VALUES ('$name','$code','$class')";
	if (mysqli_query($db,$query))
	{
		echo '<i style="color:green;">Subject Added Successfully</i>';
	}
	else
	{
		echo '<i style="color:red;">Some Error Occured. Try Again with different values</i>';
	}
}
?>