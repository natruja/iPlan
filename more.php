<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />


	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- Datepicker -->
	<link rel="stylesheet" href="css/plugins/datepicker/datepicker.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- datepicker -->
	<script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
	<script>
			 $(document).ready(function () {
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

<body>
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
									$sql = "SELECT * FROM test";
									$query = mysql_query($sql) or die ("Error".mysql_error());
									
									$test6 = str_word_count($new, 2);
									print_r($test6);

									print_r(str_word_count("Hello world & good morning!", 1));
									echo '<br>';
									print_r(str_word_count("Hello world & good morning!", 1, "&"));

									for ($i = 0; $i < 10; $i++) {
										if ($i % 2 == 0) {
											echo "Flipflop";
										}
									}
									 
									$a        = 10;
									$otherVar = 20;
									$mmmaa    = 222;
									echo "datea";
									echo $otherVar;

									$data = "Two Ts and one F.";

									foreach (count_chars($data, 1) as $i => $val) {
										echo "There were $val instance(s) of \"", chr($i), "\" in the string.\n <br >";
									}
									?>
							</div>
						</div>
					</div>
				</div><!-- row-fluid -->
			</div>
		</div>
	</div>

	</body>
	</html>

