$(document).ready(function() {
	
	$('#login').on("click",function(){
		//alert("hello");
		
		//////ajax
		$.ajax({
			 type:"POST",
			 url:"services/sign_in_services.php",
			 data:$('.sign-in').serialize(),
			 success:function(e){
				 var jesonData=JSON.parse(e);
                 
				 if(jesonData.result=="success"){
					 
					// alert("thanks");
					window.location="test.php";
					 }
					 else{
						 //alert("sorry invalid login");
						 
						 $('.message').text("invalid");
						 }
				 }
			 
			 
		        });
	});
	
	////////////////////////////////////
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
		    
	
	
	
	$('.logout').on("click",function(){
		
		
		
		 $.ajax({
			 type:"POST",
			 url:"services/logout.php",
			 data:{},
			 success:function(){
				 //alert(data);
				 window.location="test.php";
			 }
			 
			 
		 });
		
		});
	
	
	
	///////////////////////////
	 $('.add-cart').on("click",function(){
		 var x=$(this).parent().find('.current_pid').val();
		 
		 /*alert(x);*/
		 
		 $.ajax({
			 type:"POST",
			 url:"services/add_cart.php",
			 data:{ "pid" : x},
			 success:function(data){
				 //alert(data);
				 $('.shopping-cart').text(data);
			 }
			 
			 
		 });
		 
		/* var x="inass";
           alert(x);*/
	                 }
                   );    
}
);