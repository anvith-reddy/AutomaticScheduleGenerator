<?php
$subject = $_GET["sub"];
include('config.php');
?>
<div class="box-header">
												<h3 class="box-title">Faculty</h3>
												
											</div>
											<div class="box-body no-padding">
												<table class="table table-striped">
													<tr>
														<th style="width: 10px">#</th>
														<th style="width: 60px">Name</th>
														<th style="width: 30px">Mobile</th>
														<th style="width: 30px">Subjects</th>
													</tr>	
													<?php
													$facultys = "select * from faculty where subjects like '%{$subject}%'";
													$facultys = mysqli_query($db,$facultys);
													foreach($facultys as $faculty)
													{
														?>
													<tr>
														<td><?php echo $faculty["id"]; ?></td>
														<td><?php echo $faculty["name"]; ?></td>
														<td><?php echo $faculty["mobile"]; ?></td>
														<td><?php echo $faculty["subjects"]; ?></td>
													</tr>
													<?php } ?>
												</table>
											</div>