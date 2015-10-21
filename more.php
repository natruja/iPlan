 <!doctype html>
<html>
<head>
	 <?php
		include 'header/header.php';
	?>
	<script>
			 $(document).ready(function () {
			 	$("#more a:contains('Forms')").parent().addClass('active');
        		$("#more a:contains('More')").parent().addClass('active');

			 		$('#test2').hide();
			 		$('#test3').hide();
				 	$('#date').datepicker({
	          			 format:  "yyyy-mm-dd",
	        			 autoclose: true,
   						 todayHighlight: true
	   				 });

						 	$('#text1').keyup(function() {
						 		$('#test2').show();
						 	});


						 	$('#text2').keyup(function() {
						 		$('#test3').show();
						 	});





				 	$('#submit').on('click', function() {
				 		var date =  $('#date').val();

				 		var text1 = $('#text1').val();


				 		 var isValid = true;
				 		 $('input[type="text"]').each(function() {
				 		 	if($.trim($(this).val()) === ""){
				 		 		isValid = false;
				 		 		$(this).css({
				 		 			"border": "1px solid red"
				 		 		});
				 		 	}else{
				 		 		$(this).css({
									"border": ""
				 		 		});
				 		 	}

				 		 });

				 	



				 	});

			 });
	</script>
	<style type="text/css" media="screen">
		#main{
			margin-left: 5px;
		}
		 .selected {
		    color: red;
		  }
	</style>
</head>

<body id="more">
	<?php
		include 'navication/navebar.php';
	?>
	<div class="container-fluid" id="content">
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Blank page</h1>
					</div>
					<div class="pull-right">
						<ul class="minitiles">
							<li class='grey'>
								<a href="#"><i class="icon-cogs"></i></a>
							</li>
							<li class='lightgrey'>
								<a href="#"><i class="icon-globe"></i></a>
							</li>
						</ul>
						<ul class="stats">
							<li class='satgreen'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">$324,12</span>
									<span>Balance</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">Pages</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html">Blank page</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="icon-reorder"></i>
									Basic Widget
								</h3>
							</div>
							<div class="box-content">
								<form action="#" method="get">
								<div class="span12">
									 <div class="span4 control-group" id="test">
									 	 <input type="text" name="" value="" class="" placeholder="" id="text1">

									 	 <input type="text" name="" value="" placeholder="" id="text2">
									 	 <span class="error_msg"></span>
									 	<input type="text" id="date">
									 </div>
									 <div class="span4 control-group" id="test2">
									 	<input type="text" name="" value="" placeholder="">
									 	<input type="text" name="" value="" placeholder="">
									 </div>
									 <div class="span4 control-group" id="test3">
									 	<input type="text" name="" value="" placeholder="">
									 	<input type="text" name="" value="" placeholder="">
									 </div>
								 </div>
								 <div class="span12">
								 	 <div class="form-actions">
										<input type="submit"  class="btn btn-primary" id="submit" value="Submit" >
										<button type="button" class="btn">Cancel</button>
									</div>
								 </div>

								</form>
									 <?php
									 
										$new = "news bra bra";
										// $test = highlight_string($new);

										$mysqli = new mysqli("localhost", "root", "", "imp");
										if (mysqli_connect_error()) {
														echo "ErorConnect" . mysqli_connect_error();
														exit();
										}

										// if ($result = $mysqli->query("SELECT imp()")) {
										//     $row = $result->fetch_row();
										//     printf("Default database is %s.\n", $row[0]);
										//     $result->close();
										// }

										$mysqli->select_db("imp");

										$sql = "SELECT * FROM ia_status";

										$query = mysqli_query($mysqli, $sql) or die("Error" . mysql_error());
										$row = mysqli_num_fields($query);
										while ($fe = mysqli_fetch_array($query)) {
														echo $fe[1];
														echo "<br >";
										}

										// print_r(str_word_count("Hello world & good morning!", 1));
										// echo '<br>';
										// print_r(str_word_count("Hello world & good morning!", 1, "&"));

										for ($i = 0; $i < 10; $i++) {
														if ($i % 2 == 0) {
																		
																		//echo "Flipflop"."<br >";
																		
														}
										}

										$data = "Two Ts and one F.";

										// foreach (count_chars($data, 1) as $i => $val) {
										// 	echo "There were $val instance(s) of \"", chr($i), "\" in the string.\n <br >";
										// }
										?>


									<?php $id = "10" ?>
									 <a href="process.php?id=<?=$id ?>" class="btn btn-primary">click</a>


							</div>
						</div>
					</div>
				</div><!-- row-fluid -->
			</div>
		</div>
	</div>

	</body>
	</html>

