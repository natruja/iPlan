<!DOCTYPE html>
<html>
<head>
 	<?php 
	 	include 'header/header.php';
	 ?>
	<style type="text/css" media="screen">
		#main{
			margin-left: 10px;
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
						
					</div>
				</div>



			</div>	
		</div>
	</div>
	 
</body>
</html>