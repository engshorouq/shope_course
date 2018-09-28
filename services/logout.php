<?php session_start();

unset($_SESSION['aid']);
				unset($_SESSION['username']);
				
				
				echo json_encode("done");

?>