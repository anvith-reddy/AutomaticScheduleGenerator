<?php
include('config.php');
$class = $_GET["class"];
$section = $_GET["section"];
if($class == "0" || $section == "0")
{
	echo "Please select Valid class and section";
	break;
}
else
{

	$slotid = "select `$class` from sections where section='$section'";
	$slotid = mysqli_fetch_row(mysqli_query($db,$slotid));
	
	$slotinfos = "SELECT * FROM `slot_info` WHERE class='$slotid[0]'";
	$slotinfo = mysqli_query($db,$slotinfos);
	
	
	
	
	
}
function facdetails($id)
{
	include('config.php');
	$det = "select name from faculty where id='$id'";
	$det = mysqli_fetch_row(mysqli_query($db,$det));
	return $det[0];
}
	

?>
<div class="row">
        
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Time Table of</h3><b>Class</b><?php echo " ";echo $class; ?><b> Section</b><?php echo " ";echo $section; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table align="center" class="table table-bordered">
                <tr>
				  <th>Day</th>
				  <th>1st Hour</th>
				  <th>2nd Hour</th>
				  <th>3rd Hour</th>
				  <th>4th Hour</th>
				  <th>5th Hour</th>
				  <th>6th Hour</th>
				  <th>7th Hour</th>
                </tr>
                <tr>
				<?php
				$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
				for($i=0;$i<sizeof($days);$i++)
				{
					echo '<tr>';
					echo '<td>';echo $days[$i];echo '</td>';
					foreach($slotinfo as $slot_info)
					{
						echo '<td>';echo $slot_info['subject']; echo '<br>';echo $slot_info['faculty'];echo "-";echo facdetails($slot_info['faculty']);echo '</td>';
					}
					echo '</tr>';
				}
					?>
                  
                
                
              </table>
            </div>
            
          </div>
          <!-- /.box -->
