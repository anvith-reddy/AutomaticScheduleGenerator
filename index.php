<?php
include('config.php');

?>
<!doctype html>
<html>

	<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TIME TABLE Generator</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
	<link rel="stylesheet" href="assets/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
	<script src="assets/select2/dist/js/select2.full.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
$(document).ready(function (e) {
	$("#add_subject").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "add_subject.php",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#add_subject_response").html(data);
			$.ajax({
    url: 'index.php',
    dataType: 'html',
    success: function(html) {
        var div = $('#subjects2', $(html)).addClass('done');
        $('#subjects1').html(div);
    }
});
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
$(document).ready(function (e) {
	$("#add_faculty").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "add_faculty.php",
			type: "POST",
			data:  new FormData(this),
			beforeSend: function(){$("#body-overlay").show();},
			contentType: false,
    	    processData:false,
			success: function(data)
		    {
			$("#add_faculty_response").html(data);
			document.getElementById("faculty_fname").value="";
			document.getElementById("faculty_lname").value="";
			document.getElementById("faculty_mobile").value="";
			document.getElementById("faculty_subjects").value="";
			$.ajax({
    url: 'index.php',
    dataType: 'html',
    success: function(html) {
        var div = $('#faculty2', $(html)).addClass('done');
        $('#faculty1').html(div);
    }
});
			},
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
function view()
{
	var ajaxRequest;
		try
		{ 
			ajaxRequest = new XMLHttpRequest();
		}
		catch (e)
		{ 
			try
			{ 
				ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); 
			}
			catch (e) 
			{
				try
				{ 
					ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
				}
				catch (e)
				{ 
					alert("Your browser broke!"); 
					return false; 
				}
			}
		}
		ajaxRequest.onreadystatechange = function()
		{
			if(ajaxRequest.readyState == 4)
			{
				var ajaxDisplay = document.getElementById('tt_response');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}
		var section = document.getElementById('tt_section').value;
		var clas = document.getElementById('tt_class').value;
		var queryString = "?class="+clas+"&section="+section;
		ajaxRequest.open("GET", "timetable.php"+queryString, true);
		ajaxRequest.send(null);
}

function generate()
{
	var ajaxRequest;
		try
		{ 
			ajaxRequest = new XMLHttpRequest();
		}
		catch (e)
		{ 
			try
			{ 
				ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); 
			}
			catch (e) 
			{
				try
				{ 
					ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
				}
				catch (e)
				{ 
					alert("Your browser broke!"); 
					return false; 
				}
			}
		}
		ajaxRequest.onreadystatechange = function()
		{
			if(ajaxRequest.readyState == 4)
			{
				var ajaxDisplay = document.getElementById('ge_response');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}
		var gesection = document.getElementById('ge_section').value;
		var geclas = document.getElementById('ge_class').value;
		var queryString = "?class="+geclas+"&section="+gesection;
		ajaxRequest.open("GET", "generate.php"+queryString, true);
		ajaxRequest.send(null);
}
function reset()
{
	var ajaxRequest;
		try
		{ 
			ajaxRequest = new XMLHttpRequest();
		}
		catch (e)
		{ 
			try
			{ 
				ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); 
			}
			catch (e) 
			{
				try
				{ 
					ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
				}
				catch (e)
				{ 
					alert("Your browser broke!"); 
					return false; 
				}
			}
		}
		ajaxRequest.onreadystatechange = function()
		{
			if(ajaxRequest.readyState == 4)
			{
				var ajaxDisplay = document.getElementById('re_response');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}
		var resection = document.getElementById('re_section').value;
		var reclas = document.getElementById('re_class').value;
		var queryString = "?class="+reclas+"&section="+resection;
		ajaxRequest.open("GET", "reset.php"+queryString, true);
		ajaxRequest.send(null);
}
function selectedsubjects()
{
	var ajaxRequest;
		try
		{ 
			ajaxRequest = new XMLHttpRequest();
		}
		catch (e)
		{ 
			try
			{ 
				ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); 
			}
			catch (e) 
			{
				try
				{ 
					ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
				}
				catch (e)
				{ 
					alert("Your browser broke!"); 
					return false; 
				}
			}
		}
		ajaxRequest.onreadystatechange = function()
		{
			if(ajaxRequest.readyState == 4)
			{
				document.getElementById('subjects2').value = "";
				var ajaxDisplay = document.getElementById('subjects2');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}
		var select = document.getElementById('sub_class').value;
		var queryString = "?class="+select;
		ajaxRequest.open("GET", "getsubjects.php"+queryString, true);
		ajaxRequest.send(null);
	
}
function facsubs()
{
	var ajaxRequest;
		try
		{ 
			ajaxRequest = new XMLHttpRequest();
		}
		catch (e)
		{ 
			try
			{ 
				ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP"); 
			}
			catch (e) 
			{
				try
				{ 
					ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
				}
				catch (e)
				{ 
					alert("Your browser broke!"); 
					return false; 
				}
			}
		}
		ajaxRequest.onreadystatechange = function()
		{
			if(ajaxRequest.readyState == 4)
			{
				document.getElementById('faculty2').value = "";
				var ajaxDisplay = document.getElementById('faculty2');
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}
		var fac_sub = document.getElementById('fac_sub').value;
		var queryString = "?sub="+fac_sub;
		ajaxRequest.open("GET", "getfaculty.php"+queryString, true);
		ajaxRequest.send(null);
}

</script>
	</head>
	<body class="  ">
	<div class="modal fade" id="addsubject" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">				
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Modal Header</h4>
													</div>
													<div class="modal-body">
														<form role="form" id="add_subject" name="add_subject">
															<div class="box-body">
																<div class="form-group">
																	<label for="exampleInputEmail1">Class</label>
																	<select class="form-control" name="subject_class" id="subject_class">
																		<option value="0">Select Class</option>
																		<option value="cse">C.S.E</option>
																		<option value="ece">E.C.E</option>
																		<option value="eee">E.E.E</option>
																		<option value="mech">Mechanical</option>
																		<option value="civil">Civil</option>
																	</select>
																</div>
																<div class="form-group">
																	<label for="exampleInputEmail1">Subject Code</label>
																	<input type="text" class="form-control" id="subject_code" name="subject_code" placeholder="Enter Subject Code">
																</div>						
																<div class="form-group">
																	<label for="exampleInputPassword1">Subject Name</label>
																	<input type="text" class="form-control" id="subject_name" name="subject_name" placeholder="Enter Subject Name">
																</div>
															</div>
															<div id="add_subject_response"></div>
														</div>
														<div class="modal-footer">
															<button type="submit" name="submit" class="btn btn-primary">Submit</button>
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>	
												</form>
											</div>
										</div>
										
	<div class="modal fade" id="addfaculty" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Modal Header</h4>
													</div>
													<div class="modal-body">
														<form role="form" id="add_faculty" name="add_faculty">
															<div class="box-body">
																<div class="form-group">
																	<label for="exampleInputPassword1">Name</label>
																	<input type="text" class="form-control" id="faculty_mobile" name="faculty_name" placeholder="Enter Name">
																</div>
																<div class="form-group">
																	<label for="exampleInputPassword1">Mobile</label>
																	<input type="text" class="form-control" id="faculty_mobile" name="faculty_mobile" placeholder="Enter Mobile Number">
																</div>
																<div class="form-group">
																	<label for="exampleInputEmail1">Class</label>
																	<select class="form-control" multiple="multiple" name="faculty_subjects[]" id="faculty_subjects[]" data-placeholder="Select a State" style="width: 100%;">
																	<?php $afsubjects = "select * from subjects";
																	$afsubjects = mysqli_query($db,$afsubjects);
																	foreach ($afsubjects as $afsubject)
																		{
																	?>		
																		<option value="<?php echo $afsubject["code"]; ?>"><?php echo $afsubject["class"];echo "-";echo $afsubject["name"]; ?></option>
																	<?php } ?>
																	</select>
																</div>
															</div>
															<div id="add_faculty_response"></div>
														</div>
														<div class="modal-footer">
															<button type="submit" name="submit" class="btn btn-primary">Submit</button>
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>
												</form>
											</div>
											
										</div>
  
        <div class="bg-dark dk" id="wrap">
			<div id="top">
				<header class="head">
                    <div class="main-bar">
					<b style="font-size:30px;"> TIME TABLE</b><i><b style="font-size:20px;">&nbsp;&nbsp;Generator</b></i>
						<ul class="nav nav-tabs pull-right">
							<li class="active"><a data-toggle="tab" href="#timetable">Time-Table</a></li>
							<li><a data-toggle="tab" href="#subjects">Subjects</a></li>
							<li><a data-toggle="tab" href="#faculty">Faculty</a></li>
							<li><a data-toggle="tab" href="#generate">Generate</a></li>
							<li><a data-toggle="tab" href="#reset">Reset</a></li>
						</ul>
                    </div>
                </header>
            </div>
            <div id="content">
				<div class="outer">
                    <div class="inner bg-light lter">
						<div class="col-lg-12">
						
							<div class="tab-content">
							
								<div id="timetable" class="tab-pane fade in active">
									<h3>HOME</h3>
									<div class="box">
										<div class="form-group">
											<label for="exampleInputEmail1">Choose your choice</label>
												<div class="row">
													<div class="col-xs-3">
														<select name="tt_class" id="tt_class" class="form-control">
															<option value="0">Select Class</option>
															<option value="cse">C.S.E</option>
															<option value="ece">E.C.E</option>
															<option value="eee">E.E.E</option>
															<option value="mech">Mechanical</option>
															<option value="civil">Civil</option>
														</select>
													</div>
													<div class="col-xs-3">
														<select name="tt_section" id="tt_section" class="form-control">
															<option value="0">Select section</option>
															<option value="1">Section 1</option>
															<option value="2">Section 2</option>
															<option value="3">Section 3</option>
														</select>
													</div>
													<div class="col-xs-2">
														<button class="btn btn-info" name="view" onclick="view()">Submit</button>
													</div>
												</div>
											</div>
										</div>
										<div id="tt_response">
										</div>
									</div>

								
									<div id="subjects" class="tab-pane fade">
										<div class="row" id="subjects1">
										
										<div class="box">
										<div class="form-group">
											<label for="exampleInputEmail1">Choose your choice</label>
												<div class="row">
													<div class="col-xs-3">
														<select name="tt_class" id="sub_class" class="form-control" onchange="selectedsubjects()">
															<option value="0">Select Class</option>
															<option value="cse">C.S.E</option>
															<option value="ece">E.C.E</option>
															<option value="eee">E.E.E</option>
															<option value="mech">Mechanical</option>
															<option value="civil">Civil</option>
														</select>
													</div>
													<button type="button" class="btn pull-right btn-default" data-toggle="modal" data-target="#addsubject"><i class="fa fa-plus"></i></button>
												</div>
											</div>
										</div>
									
											<div class="box" id="subjects2">
													
											</div>
										</div>
									</div>
	
	
									<div id="faculty" class="tab-pane fade">
										<div class="box">
										<div class="form-group">
											<label for="exampleInputEmail1">Choose your choice</label>
												<div class="row">
													<div class="col-xs-3">
														<select name="fac_sub" id="fac_sub" class="form-control" onchange="facsubs()">
															<option value="0">Select subject</option>
															<?php
															$qsubs = "select * from subjects";
															$qsubs = mysqli_query($db,$qsubs);
															foreach($qsubs as $qsub)
															{
																?>
																<option value="<?php echo $qsub["code"]; ?>"><?php echo $qsub["name"]; ?></option>
															<?php } ?>
														</select>
													</div>
													
													<button type="button" class="btn pull-right btn-default" data-toggle="modal" data-target="#addfaculty"><i class="fa fa-plus"></i></button>
												</div>
											</div>
										</div>
										
																		
										
										<div class="row" id="faculty1">
										<div class="box" id="faculty2">
											<div class="box-header">
												<h3 class="box-title">Faculty</h3>
											</div>
											<div class="box-body no-padding">
												<table class="table table-striped">
													<tr>
														<th style="width: 10px">#</th>
														<th style="width: 20px">Name</th>
														<th style="width: 20px">Mobile</th>
														<th style="width: 50px">Subjects</th>
													</tr>	
													<?php
													$facultys = "select * from faculty";
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
										</div>
									</div>
								</div>
		
								<div id="generate" class="tab-pane fade">
									<h3>Generate Time-Table</h3>
									<div class="box">
										<div class="form-group">
																<label for="exampleInputEmail1">Choose Your Options</label>
																<div class="row">
																	<div class="col-xs-3">
																		<select name="ge_class" id="ge_class" class="form-control">
																			<option value="0">Select Class</option>
																			<option value="cse">C.S.E</option>
															<option value="ece">E.C.E</option>
															<option value="eee">E.E.E</option>
															<option value="mech">Mechanical</option>
															<option value="civil">Civil</option>
																		</select>
																	</div>
																	<div class="col-xs-3">
																		<select name="ge_section" id="ge_section" class="form-control">
																			<option value="0">Select section</option>
																			<option value="1">Section 1</option>
																			<option value="2">Section 2</option>
																			<option value="3">Section 3</option>
																		</select>
																	</div>
																	<div class="col-xs-2">
																		<button class="btn btn-info" name="generate" onclick="generate()">Generate</button>
																	</div>
																</div>
															</div>
															</div>
															<div id="ge_response"></div>
								</div>
								
	
								<div id="reset" class="tab-pane fade">
									<h3>Reset Time-Table</h3>
									<div class="box">
										<div class="form-group">
										<label for="exampleInputEmail1">Choose Your Options</label>
																<div class="row">
																	<div class="col-xs-3">
																		<select name="re_class" id="re_class" class="form-control">
																			<option value="0">Select Class</option>
																			<option value="cse">C.S.E</option>
															<option value="ece">E.C.E</option>
															<option value="eee">E.E.E</option>
															<option value="mech">Mechanical</option>
															<option value="civil">Civil</option>
																		</select>
																	</div>
																	<div class="col-xs-3">
																		<select name="re_section" id="re_section" class="form-control">
																			<option value="0">Select section</option>
																			<option value="1">Section 1</option>
																			<option value="2">Section 2</option>
																			<option value="3">Section 3</option>
																		</select>
																	</div>
																	<div class="col-xs-2">
																		<button class="btn btn-info" name="reset" onclick="reset()">Reset</button>
																	</div>
																</div>
															</div>
															</div>
															<div id="re_response"></div>
								</div>
	
							</div>
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>


            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>


            
        </body>

</html>
