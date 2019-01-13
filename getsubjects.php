<?php
$id = $_GET["class"];
include('config.php');
?>
<div class="box-header">
													<h3 class="box-title">Subjects</h3>
													
												</div>
												<div class="box-body no-padding">
													<table class="table table-striped">
														<tr>
															<th style="width: 10px">#</th>
															<th style="width: 60px">Name</th>
															<th style="width: 40px">Class</th>
															<th style="width: 50px">Code</th>
														</tr>
														<?php
														$subjects = "select * from subjects where class='$id'";
														$subjects = mysqli_query($db,$subjects);
														foreach($subjects as $subject)
														{
														?>
														<tr>
															<td><?php echo $subject["id"]; ?></td>
															<td><?php echo $subject["name"]; ?></td>
															<td><?php echo $subject["class"]; ?></td>
															<td><?php echo $subject["code"]; ?></td>
														</tr>
														<?php } ?>
													</table>
												</div>