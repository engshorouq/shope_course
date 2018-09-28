<?php
class accounts{
	
	private $conn;
	
	public function __construct(){
	$this->conn= mysqli_connect("localhost","root","","shop");	
		$this->conn->set_charset("utf8");
		
		
	}
	
	
	public function check_accounts($email,$pass){
		
		

	
     //$res=mysqli_query($this->conn,"insert into accounts(username,email,password,salt)       values('$x','$y','$p','$salt')");
	 $res=mysqli_prepare($this->conn,"select aid,username,email,password,salt from accounts where email=?");
	 mysqli_stmt_bind_param($res,"s",$email);
	 
	 /*execute query*/
	 mysqli_stmt_execute($res);
	 
	 /* bind result variable*/
	 mysqli_stmt_bind_result($res,$aid,$username,$x,$y,$z);
	 
	 /* fetch value*/
	$arr= mysqli_stmt_fetch($res);
	 
	// $res->bind_param("ssss",$x,$y,$p,$salt);
	// $res->execute();
	 
	 
	 /* return var_dump result*/
	 if($arr)
	 {
		
			 
			 $p=hash('sha256',$z.hash('sha256',$pass));
			 if($p==$y){
				 $data=array("aid"=>$aid,"username"=>$username);
				 return $data;
				 }
				 else{
					 return NULL;
					 
					 }
			 
			
	
	}
	else{
	
		return NULL;
	}}
	
	
	public function add_accounts($x,$y,$z){
		
		$salt=substr(uniqid(),0,3);
		$p=hash('sha256',$salt.hash('sha256',$z));

	
     //$res=mysqli_query($this->conn,"insert into accounts(username,email,password,salt)       values('$x','$y','$p','$salt')");
	 $res=mysqli_prepare($this->conn,"insert into accounts(username,email,password,salt) values(?,?,?,?)");
	 $res->bind_param("ssss",$x,$y,$p,$salt);
	 $res->execute();
	 
	
	}}
	 ?>