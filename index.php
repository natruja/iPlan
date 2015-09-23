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
	 				 var table = $('#example').DataTable( {
	 				 	"bPaginate": false,
       					"bRetrieve": true
       					 
       					
   					 });
   					
   					$('#test2').appendTo('div.dataTables_length');
					var oTable = $('#example').dataTable();
					$('#selector').change(function(){
					      oTable.fnFilter($(this).val());
					});
					 
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
	
	 			
	 			 
	 			
	 			var test = $('#form_send').serialize();
	 			var message = "Do you want to close?";
	 	 		$('#success').click(function(e) {
	 			 	 bootbox.confirm(message,function(result){
	 			 	 	alert(result);
	 			 	 	 // if(data === true){
	 			 	 	 // 	window.location.href = 'http://www.google.com'; 
	 			 	 	 // }
	 			 	 });
						 
	 			 	 
           			 
	 			 }) ;
	 			 	 
	 		});
	 </script>
	 <style type="text/css" media="screen">
		#main{
			margin-left: 5px;
		}
		/*#refresh{
			float: center;
			margin-left: 50px;
			border: 1px; 
		}*/
		div.dataTables_length {
		    padding-left: 2em;
		    border-style: solid;
    		border-width: medium;
    		width: 45%;
		}
	    div.dataTables_filter {
	        padding-top: 0.55em;
	        border-style: solid;
    		border-width: medium;
	    } 
	    #test2{
	    	float: right;
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
						<h1>Blank pages</h1>
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
								 	 <?php 
								 	 	for($i=0; $i< 5; $i++){

								 	 ?>
								 	 <a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $i ?> ">Launch demo modal <?php echo $i ?></a>
								 	 <div id="myModal<?php echo $i ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $i ?>" aria-hidden="true">
								 	 	<div class="modal-header">
								 	 		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								 	 		<h3 id="myModalLabel">Modal header</h3>
								 	 	</div>
								 	 	<div class="modal-body">
								 	 		<div id="modal-results">
												<?php echo $i; ?>

								 	 		</div>


								 	 	</div>
								 	 	<div class="modal-footer">
								 	 		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								 	 		<button class="btn btn-primary" id="save">Save changes</button>
								 	 	</div>
								 	 </div>
								 		<?php 
								 			}
								 		 ?>
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

			 	<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Dynamic table
								</h3>
							</div>
								 
							<div id="test2">
								เดือน &nbsp; &nbsp;<select name="sle" id="selector" style="width: 100px;">
									<option>เลือก</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select> 
							</div>
							<div class="box-content nopadding">
								<table class="table dataTable" id="example" width="100%">
									<thead>
										<tr>
											<th>Rendering engine</th>
											<th>Browser</th>
											<th class='hidden-350'>Platform(s)</th>
											<th class='hidden-1024'>Engine version</th>
											<th class='hidden-480'>CSS grade</th>
										</tr>
									</thead>
									 <tfoot>
							            <tr>
							                <th>Name</th>
							                <th>Position</th>
							                <th>Office</th>
							                <th>Age</th>
							                <th>Start date</th>
							                
							            </tr>
							        </tfoot>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>
												Internet
													Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td class='hidden-350'>Windows Mobile 6</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td class='hidden-350'>PSP</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td class='hidden-350'>-</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>U</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>
												Internet
													Explorer 4.0
											</td>
											<td class='hidden-350'>Win 95+</td>
											<td class='hidden-1024'>4</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class='hidden-350'>N800</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>NetFront 3.4</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>A</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Dillo 0.8</td>
											<td class='hidden-350'>Embedded devices</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Links</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>Lynx</td>
											<td class='hidden-350'>Text only</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>X</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>IE Mobile</td>
											<td class='hidden-350'>Windows Mobile 6</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>C</td>
										</tr>
										<tr>
											<td>Misc</td>
											<td>PSP browser</td>
											<td class='hidden-350'>PSP</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>C</td>
										</tr>
										<tr>
											<td>Other browsers</td>
											<td>All others</td>
											<td class='hidden-350'>-</td>
											<td class='hidden-1024'>-</td>
											<td class='hidden-480'>U</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

		 

 
			</div>
		</div>
	</div>
		
</body>
</html>