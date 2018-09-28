<?php  session_start();
	include_once("db_lib/main.class.php");
	$main_obj=new main();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="lib/lib/bootstrap.css">
<link rel="stylesheet" type="text/css" href="lib/lib/bootstrap-rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="container-fluid" > <!--main div -->

    <!--first div -->
    <div class="row">
           <div class="col-sm-3 logo">
               <div>موضة أون لاين</div> 
           </div>
           <div class="col-sm-3 search">
           <span class="glyphicon glyphicon-search"></span>
           <input type="text" id="" name="" placeholder="ابحث في موضة">
           </div> 
           
           
            <div class="col-sm-3 auth-area">
                 <div>
                 <?php if(isset($_SESSION['username']) and !empty($_SESSION['username'])){
					 
					 echo "wellcome"." ".$_SESSION['username']." ";?>
					
					 <a href="#" class="logout">logout</a>
				<?php }
				else{?>
                 <a href="sign_up.php" >مستخدم جديد</a>
                 <a href="sign_in.php">تسجيل الدخول</a>
                 <?php }?>
                 </div>
            </div>
            
            
            <div class="col-sm-3 contact">
            <span class="glyphicon glyphicon-bell"></span>
     
      1233444لاتتردد في الاتصال بنا على 
            
            </div>
     
       </div>    
    
    
 
    <!--second div -->       
    <div class="row menu">
           <div class="col-sm-8 innermenu">men</div>
           <div class="col-sm-2 innermenu">men</div>
           <div class="col-sm-2 innermenu">
           <a href="show_cart.php">
           سلة المشتريات
          (
          <span class="shopping-cart"></span>
          )
          </a>
          </div>
      
    </div> 
    
       
       
    <!--third div -->
    <div class="row">
           <div class="col-sm-8">
           <?php 
	       $cat_data=$main_obj->get_data();
	       foreach($cat_data as $tmp_data){
			?>
            <div class="white-box">
        	<div class="row" >
                 <div class="col-sm-12">
                  <?php echo $tmp_data['cat_name'];?>
                  </div>
            </div>
            <div class="row">
            
            <?php
			$count=0;
			 $product_cat=$main_obj->get_cat_product($tmp_data['cat_id']);
			foreach($product_cat as $temp_product){
				$count++;
				?>
            	<div class="col-sm-3">
                	<div class="gray_box">
                    	<div>
                        	<img src="pic_img/<?php echo $temp_product['p_img'];?>" class="img-thumbnail">
                        </div>
                        <div>
							<?php echo $temp_product['p_title'];?>
                        </div>
                        
                        <div>
							<?php echo $temp_product['p_price'];?>
                        </div>
                        
                        <div>
                <input type="hidden"  id="" name="" value="<?php echo $temp_product['p_id'];?>" class=                  "current_pid" />      
                <input type="button" id="" name="" value="اضف للسلة" class="btn btn-success btn-sm add-cart">
                        </div>
                         
                        
                   </div>
              </div>
                                                   <?php } ?>
            
            
            
             </div>
             </div>
          <?php } ?>
      </div>
            
             
           <div class="col-sm-4">
               <div class="white-box">1</div>
               <div class="white-box">2</div>
               <div class="white-box">3</div>
               <div class="white-box">4</div>
                </div>
     
           
    </div>       
           
           
           
           
           
           
           
           
             
    
    
    
    
    <!--fourth div --> 
    <div class="row sep"></div>
    <div class="row about">
          <div class="col-sm-8">r</div>
          <div class="col-sm-4">l</div>
   
    </div>
    
    <!--fifth div --> 
    <div class="row"> 5</div>
     
     
     
     
       
</div>









<script src="lib/lib/jquery-1.11.3.js"></script>
<script src="lib/lib/bootstrap.js"></script>
<script src="js/myapp.js"></script>
</body>
</html>