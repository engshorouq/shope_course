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
                 <a href="sign_up.php">مستخدم جديد</a>
                 <a href="sign_in.php">تسجيل الدخول</a>
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
             <div class="row">
             <div class="col-sm-4" ></div>
             <div class="col-sm-4 " align="center" >
             
             <form class="sign-up" >
             <input type="text" id="username" name="username" placeholder="اسمك"
             class="form-control"/>
             <input type="email" id="email" name="email" placeholder="ايميلك"
             class="form-control"/>
             <input type="password" id="password" name="password" placeholder="كلمة المرور"
             class="form-control"/>
             <input type="button" id="save" name="save" value="تسجيل الدخول"
             class="form-control btn btn-danger"/>
             
             </div>
             <div class="col-sm-4"></div>
          
		     </div>
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
<script type="text/javascript">
$(document).ready(function() {
	///////////////////////////
	
	$('#save').on("click",function(){
		//alert("hello");
		
		
		//////ajax
		$.ajax({
			 type:"POST",
			 url:"services/sign_up_services.php",
			 data:$('.sign-up').serialize(),
			 success:function(e){
				 alert(e); }
			 
			 
		        });
	});
	
	
	
	
	
	
	
	  $('.increase').on("click",function(){
		  $(this).parent().find('.qua').text(parseInt($(this).parent().find('.qua').text())+1);  
		   
		   var pid=$(this).parent().parent().find('.pid').text();
		   
		   //alert(pid);للتأكد من الحصول على pid
		   var price=$(this).parent().parent().find('.price').text();
		   var qua=$(this).parent().parent().find('.qua').text();
		   var total=$(this).parent().parent().find('.total').text(price*qua);
		   
		   $.ajax({
			 type:"POST",
			 url:"services/add_cart.php",
			 data:{ "pid" : pid},
			 success:function(e){ }
				 
			  
			 
			 
		        });
		  
	  });
	
	
	
	
	
	
	
	
	 $('.delete-cart').on("click",function(){
		 /*اللي انضغت عليه*/
		 /*جيب ابوه*/
		 var x=$(this).parent().find('.current_id').text();
		 
		 //alert(x);
		 
		 
		 var current_event=$(this);
		 
		 
		 $.ajax({
			 type:"POST",
			 url:"services/delete_cart.php",
			 data:{ "x" : x},
			 success:function(e){ current_event.parent().parent().hide(1000);}
				 
			 
			 
			 
		        });
		 
}

);		 
		    
}

);
////////////////////////////
</script>
</body>
</html>