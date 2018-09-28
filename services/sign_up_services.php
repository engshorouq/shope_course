<?php
include_once("../db_lib/accounts.class.php");
	$a=new accounts();
	$a->add_accounts($_POST['username'],$_POST['email'],$_POST['password']);


echo json_encode("DONE");



?>
