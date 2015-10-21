<?php 
 
$id = $_GET["id"];
$id_ram = explode("/", $id);
print_r($id_ram);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php
		include 'header/header.php';
	?>

</head>
<body>
	 <p>Lot update Success</p>
	 <?php $name = "Project 1" ?>
	 <p><?php echo "โครงการ Test", $name; ?></p>
	 <p><?php echo "ระบบ New Node" ?></p>
	<!-- <button type="button" class="btn btn-default">button</button>
	<button type="button" class="btn btn-danger">button</button> -->
	<?php
		// $x 	= 	array( 1, 2, 3);
		// $y 	= 	array( 3,4,5,6);
		// $z 	= 	array_merge($x,$y);
		// $u 	= 	array_unique($z);
		// $d 	= 	array_diff($y, $x);
			// echo '<pre>';
			// print_r( array( 'x'=>$x, 'y'=>$y,  'merge'=>$z,  'unique'=>$u,  'diff_Y-x'=>$d ));
			// echo '</pre>';

	 	 /* Script URL */
 

// $params = explode( "/", $_GET['id'] );
// for($i = 0; $i < count($params); $i+=2) {

//   echo $params[$i] ." has value: ". $params[$i+1] ."<br />";

// }


		 
		?>
 </body>
</html>