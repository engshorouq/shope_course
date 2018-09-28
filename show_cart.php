<?php session_start();
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
                 <a href="">مستخدم جديد</a>
                 <a href="">تسجيل الدخول</a>
                 </div>
            </div>
            
            
            <div class="col-sm-3 contact">4</div>
            
       </div>    
    
    
 
    <!--second div -->       
    <div class="row menu">
           <div class="col-sm-8 innermenu">men</div>
           <div class="col-sm-2 innermenu">men</div>
           <div class="col-sm-2 innermenu">سلة المشتريات
          (
          <span class="shopping-cart"></span>
          )
          </div>
      
    </div> 
    <div class="row">
      <div class="col-sm-12">
        <div class="white-box " style="padding:10px;">
        <?php if(isset($_SESSION['cart'])and count($_SESSION['cart'])>0) { ?>
			
           <table class="table table-striped">
           
           <?php
		   foreach($_SESSION['cart'] as $pid=>$qua){
		   $productdata=$main_obj->get_sp_products($pid);
		   
		         ?>
           <tr>
           <td> <span class="pid"><?php echo $pid ; ?></span>
           </td>
		   <td> <?php echo $productdata['p_title'];?> </td>
		   <td> <span class="qua">
                <?php echo $qua ; ?>
                </span>
                <a herf="#" class="increase">
                <span class="glyphicon glyphicon-arrow-up">
                </span>
                </a>
           </td>
           
		   <td><span class="price"><?php echo $productdata['p_price']*$qua;?></span></td>
           <td><span class="total"><?php echo $productdata['p_price'];?></span></td>
		   <td>
           <span style="display:none"  class="current_id"><?php echo $pid ; ?></span>
           <input type="button" id="" name="" value="delete" class="btn btn-success btn-sm delete-cart">
            </td>             
             
           
           </tr>
           <?php } ?>
           </table>
           <?php }
		   else { echo "empty cart";
		   }?>
		     
        </div>
         </div>
          </div>
    
       
       
    <!--third div -->
    
    
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