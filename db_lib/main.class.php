<?php
class main{
	
	private $conn;
	
	public function __construct(){
	$this->conn= mysqli_connect("localhost","root","","shop");	
		$this->conn->set_charset("utf8");
		
		
	}
	public function get_data(){
			

	
	$result=mysqli_query($this->conn,"select * from  cat order by cat_id desc limit 5");
	$arr=array();
	while($row=mysqli_fetch_array($result)){
	$arr[]=$row;	
	}
	return $arr;
	}
	
	
	public function get_cat_product($cat_id){

	$result_product=mysqli_query($this->conn,"select * from product where cat_id=$cat_id ");
	$arr_product=array();
	while($row_product=mysqli_fetch_array($result_product)){
	$arr_product[]=$row_product;	
	}
	return $arr_product;
	}
	
	
	public function get_sp_products($x){

	$result_pro=mysqli_query($this->conn,"select * from product where p_id=$x ");
	$row_pro=mysqli_fetch_array($result_pro);
	
	return $row_pro;
	}
	
	
	
	/*public function check_login($a,$b){
		
	
$result=mysqli_query($this->conn,"select * from account where username='$a' and password='$b'");
    
	if(mysqli_num_rows($result)==0) {
		return NULL;
	}
	else {
	
	
	$row=mysqli_fetch_array($result);
	
	
		return $row;
	}



	
}

}
	
	public function add_records($a,$b,$c){
	
	
	mysqli_query($this->conn,"insert into student(stdname,stdid,stdimg)values('$a',$b,'$c')");
	
	}
	public function delete_records($b){
		mysqli_query($this->conn,"delete from student where stdid=$b" );
		
	}
	
	
	
		public function get_data(){
			

	
	$result=mysqli_query($this->conn,"select stdname,stdid,stdimg from student ");
	$arr=array();
	while($row=mysqli_fetch_array($result)){
	$arr[]=$row;	
	}
	return $arr;
	
} */
}

?>