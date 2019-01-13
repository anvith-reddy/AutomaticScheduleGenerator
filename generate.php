<?php
include('config.php');

$result = 0;
$class = $_GET["class"];
$section = $_GET["section"];

$class_id = "select `$class` from sections where section='$section'";
$class_id = mysqli_fetch_row(mysqli_query($db,$class_id));
$keyslot = $class_id[0];


$subjects = "select code from subjects where class='$class'";
$subject = mysqli_query($db,$subjects);

$sub_slots = "select slot_id from slot_info where class='$keyslot'";
$subslots = mysqli_query($db,$sub_slots);

$i = 0;$k=0;
foreach($subject as $sub)
{
	$fsubjects["$i"] = $sub["code"];
	$i = $i+1;
}
foreach($subslots as $subs)
{
	$fslots["$k"] = $subs["slot_id"];
	$k = $k+1;
}
$result = 0;
shuffle($fslots);
for($x=0;$x<count($fslots);$x++)
{
	shuffle($fsubjects);
	$slote = $fslots["$x"];
	for($y=0;$y<count($fsubjects);$y++)
	{
		$subb = $fsubjects["$y"];
		$faculty = "select id from faculty where subjects='$subb'";
		$faculty = mysqli_query($db,$faculty);
		foreach($faculty as $fac)
		{
			$facid = $fac["id"];
			$temp_fetch = "select count(*) from slot_info where slot_id='$slote' AND faculty='$facid'";
			$temp_fetch = mysqli_fetch_row(mysqli_query($db,$temp_fetch));
			if($temp_fetch[0] == 0)
			{
				$temp_fac = "select count(*) from slot_info where class='$keyslot' AND subject='$subb'";
				$temp_fact = mysqli_fetch_row(mysqli_query($db,$temp_fac));
				if($temp_fact[0] == 0)
				{
					$final = "UPDATE `slot_info` SET `subject`='$subb',`faculty`='$facid' WHERE class='$keyslot' AND slot_id='$slote'";
					if(mysqli_query($db,$final))
					{
						$result = $result+1;
						break;
					}
					else break;
				}
				else break;
			}
			else break;
			break;
		}
	}
}

if(count($fsubjects == $result))
{
	echo '<b style="color:green;">Time Table Successfully Generated for </b>';echo strtoupper($class);echo "->";echo $section; 
}
else echo '<b style="color:red;">Please Try again</b>';


?>