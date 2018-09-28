<?php session_start();



//$x=$_POST['x'];
$x=filter_input(INPUT_POST,'x');


unset($_SESSION['cart'][$x]);
	
echo json_encode("done");





?>