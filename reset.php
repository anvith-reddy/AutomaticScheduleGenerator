<?php
include('config.php');
$class = $_GET["class"];
$section = $_GET["section"];

$class_id = "select `$class` from sections where section='$section'";
$class_id = mysqli_fetch_row(mysqli_query($db,$class_id));
$key = $class_id[0];
$reset = "UPDATE `slot_info` SET `subject`=NULL,`faculty`=NULL WHERE class='$key'";
if (mysqli_query($db,$reset))
{
	echo "success";
}
else echo "fail";
?>