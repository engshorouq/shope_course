<?php session_start();
include_once("../db_lib/accounts.class.php");
	$a=new accounts();
	$r=$a->check_accounts($_POST['email'],$_POST['password']);
	if($r==NULL){
		
		$result=array("result"=>"fail");
		echo json_encode($result);
		
		}
		else{

				$result=array("result"=>"success");
				$_SESSION['aid']=$r['aid'];
				$_SESSION['username']=$r['username'];

				echo json_encode($result);
		
		}



?>