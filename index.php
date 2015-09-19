<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<title>PDO Test</title>
	 <?php 
	 	include 'header/header.php';
	 ?>
	 <script type="text/javascript">
	 		$(document).ready(function(){
	 			function save_detail(){
	 				var detail = $('#detail').serialize();
	 				$.ajax({
	 					url: 'process.php',
	 					data: detail,
	 					type: 'POST',
	 					success: function(data) {
	 						alert(data);
	 					}
	 				});
	 			}

	 			var test = $('#test').val();
	 			 $('#dialog-modal').dialog({
			        modal: true,
			        autoOpen: false,
			        height: 300,
			        width: 400,
					show: {
					        effect: "blind",
					        duration: 1000
					      },
					hide: {
					        effect: "explode",
					        duration: 1000
				     	 },
			        title: 'รายละเอียดการขอหนังสือนุมัติ',
			        buttons: [{
			        	text: 'ปิด',
			        	iconCls: 'icon-cancel',
			        	click: function() {
			        		$(this).dialog("close");
			        	}
			        	 
			        },{
			        	text: 'บันทึกและส่งเมล์',
			        	iconCls: 'icon-save',
			        	click: function(){
			        		save_detail();
			        		$(this).dialog("close");
			        	}
			        }],
			        open: function (e, ui) {
				        $(this).parent().find(".ui-dialog-buttonset")
				            .addClass("orange");
					 }
			        
			    });

				$('#test').change(function(event) {
		 			if($(this).val() == '2'){				 	 
	 				 $('#dialog-modal').dialog('open');
	 				}
	 			});	
	
	 			
	 			 
	 			
	 			//var test = $('#form_send').serialize();
	 	 		// $('#submit').click(function() {
	 			 // 	var test = $('#form_send').serialize();
	 			 // 	$.ajax({
	 			 // 		type:'POST',
	 			 // 		url: 'process.php',
	 			 // 		data: 'test',
	 			 // 		success: function(data){
	 			 // 			 $("#modal-results").html(data);
				  //       console.log(data);
					 //         $('#myModal').modal('hide');  
				 	// 	},
				 	// 	error: function(error) {
				 	// 		  $("#modal-results").html(error);
				 	// 	 }
	 			 // 	});
	 			 // }) ;
	 			 

	 			 
 				 

	 			 
	 			
	 		});
	 </script>
	 <style type="text/css" media="screen">
		#main{
			margin-left: 5px;
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
						 <div class="ui black horizontal label">Fruit</div>
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
									Basic Widgets
								</h3>
							</div>
							<div class="box-content">
								<div class="control-group">
									<div id="modal-results">
										
									</div>
								 	<select name="name" id="test" class='chosen-select'>
								 		<option value="1">Name 1</option>
								 		<option value="2">Name 2</option>
								 	</select>
								 	 <button class="btn btn-success" id="success">Success</button>
								 	 <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Launch demo modal</a>
								 </div>
							</div>
						</div>
					</div>
				</div><!-- row-fluid -->
				<div id="dialog-modal" title="รายละเอียดการขอหนังสือนุมัติ">
					<p class="validateTips"></p>
					<form id="form_send" method="POST">
						<fieldset>
							<label for="name">ระบุรายละเอียด</label>
						 	<textarea name="detail" id="detail" style="margin: 0px 0px 10px; width: 345px; height: 138px;"></textarea>
						</fieldset>
					</form>
				</div>

		
				<!--<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				 	<div class="modal-header">
				 		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				 		<h3 id="myModalLabel">Modal header</h3>
				 	</div>
				 	<div class="modal-body">
				 		<div id="modal-results"></div>
				 		<form action="#" method="POST" id="form_send" > 
				 			<div class="span6">
				 				test <input type="text" name="test1"  >
				 			</div>
				 			<div class="span6">
				 				test 2 <input type="text" name="test2"  >
				 			</div>
				 		</form>
				 	</div>
				 	<div class="modal-footer">
				 		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				 		<button class="btn btn-primary" id="save">Save changes</button>
				 	</div>
				 </div>-->

				 

 
			</div>
		</div>
	</div>
		
</body>
</html>