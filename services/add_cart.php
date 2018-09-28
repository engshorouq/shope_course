<?php session_start();

$pid=filter_input(INPUT_POST,'pid');
//$pid=$_POST['pid'];


if (isset ($_SESSION['cart'][$pid])){
	$_SESSION['cart'][$pid]++;
}
else {
	
     $_SESSION['cart'][$pid]=1;
}

$y=count($_SESSION['cart']);
echo json_encode($y);











?>