<!DOCTYPE html>
<html>
<head>
 	<?php
include 'header/header.php';
?>
	 <script>
       $(document).ready(function(e) {
       		$("#home a:contains('Forms')").parent().addClass('active');
        	$("#home a:contains('Home')").parent().addClass('active');

        	$('#submit').on('click', function () {
        		        		 	 
        		 	 
        		 		bootbox.prompt("เพิ่ม Email", function(result) {    
               			  if (result) {
                			  $('#result').html("Hi <b>"+result+"</b>"); // if result, "set" the document location       
                 		 }
           			 });
 			});
        	var select = $('#select').val();
        	$('#new').on('click', function() {
        		 if($('#select').val() === "0" || $('#select').val() === ""){
        		 	 bootbox.alert('คุณไม่ได้เลือกเขตหรือตำบล');
        		 }
        	});
       });
	 </script>
	<style type="text/css" media="screen">
		#main{
			margin-left: 10px;
		}
	</style>
</head>
<body id="home">
	<?php
include 'navication/navebar.php';
?>
	<div class="container-fluid" id="content">
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Home</h1>
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
							<a href="more-login.html" class="active open">Home</a>
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
					<div class="span6">
						 <textarea name="test"></textarea>
					</div>
					<div class="span6">
						<div class="span3">
							<p>
								 Left
							</p>
						</div>
						<div class="span3">
							<select name="select" id="select" class="chosen-select">
								<option value="0">Option</option>
								<option value="1">Option-1</option>
								<option value="2">Option-2</option>
								<option value="3">Option-3</option>
								<option value="4">Option-4</option>
								<option value="5">Option-5</option>
								<option value="6">Option-6</option>
								<option value="7">Option-7</option>
								<option value="8">Option-8</option>
								<option value="9">Option-9</option>
							</select>
						</div>
						<button type="submit" class="btn btn-warning" id="new" >Click</button>
						
					</div>
				</div>
					<?php
					function get_data($a, $b) {
									$data = array();

									for ($i = 0; $i <= $b; $i++) {
										$data[$i] =($a+$b)*$i."<br/>";
									}
									return $data;
					}

					$num_day = array();
					$num_day = get_data(20, 30);
					for ($k = 0; $k <= count($num_day); $k++) {
							//echo "" . $num_day[$k] . "<br/>";
					}
					  // echo "<script type='text/javascript'>
						 // 	 bootbox.alert('บันทึกข้อมูลเรียบร้อยแล้ว');
						 // </script>";
					echo '<a  class="btn btn-success" id="submit">Delete user</a>';
					?>
					<a herf='www.google.co.th' id="result">Click</a>
			</div>	
		</div>
	</div>
	 
</body>
</html>