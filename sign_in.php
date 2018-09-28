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
             
             <form class="sign-in" >
             
             <input type="email" id="email" name="email" placeholder="ايميلك"
             class="form-control"/>
             <input type="password" id="password" name="password" placeholder="كلمة المرور"
             class="form-control"/>
             <div class="message"></div>
             <input type="button" id="login" name="login" value="تسجيل الدخول"
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
<script src="js/myapp.js"></script>
</body>
</html>