 function turnOnDevice(data, button){ 
	 var id = button.id; 
	 if($('#'+id).is(':checked')){
		 $.ajax({
	         type: 'GET',
	         url: "room/switch_device/"+id+"/On",
	         success: function(data){ 
	        }
	      });
	 }else{
		 $.ajax({
	         type: 'GET',
	         url: "room/switch_device/"+id+"/Off",
	         success: function(data){ 
	        
	        }
	      });
	 } 
    } 
 function CheckForChange(){ 
 // seach_hub();
   var _this = this;
      $.ajax({
              type: 'POST',
              url: 'room/updatedata',
              success: function(data){ 
                var result = JSON.parse(data);
               		 $('#temp').html(result[0].temp);
          	         $('#tempdetail').html(result[0].temp);
                       $('#datetime').html(result[0].datetime);
                       $('#time').html(result[0].time);
                       $('#location').html(result[0].location);
                       $('#weather').html(result[0].weather);
                       $('#felling').html(result[0].judge);                     
                       $('#weather-felling').html(result[0].thi);
                       $('#humidity').html('Humidity ' + result[0].humidity + "%");  
                       $('#temp_inside').html(result[0].temp);
                       $('#temp_outside').html(result[0].temp);
             }
           });
      $.ajax({
              type: 'POST',
              url: 'room/getDemo',
              success: function(data){
                result = JSON.parse(data); 
                for(var i = 0; i< result.length ; i++){
                    if(result[i].status == "on"){
                       $('#'+ result[i].port).prop('checked', true);                         
                       $( '#custom'+ result[i].port).fadeIn(); 
                    }else{
                  	  $( '#custom'+ result[i].port).children().prop('hidden', true); 
                  	  $('#'+ result[i].port).prop('checked', false);     
                  	  $( '#custom'+ result[i].port).fadeOut();  
                    }    
                }
                window.setTimeout(CheckForChange, 2000);            
             }
           });  
 }
 CheckForChange(); 
 function demo(){
	   alert('chang');
	   }
 function creatNewUser(){
		var username = $('#form_new_username').val();
		var password = $('#form_new_password').val();
		var repass = $('#form_new_repass').val();
		var fullname = $('#form_new_fullname').val();
		var email = $('#form_new_email').val(); 
		if(username.length < 8) {
				 $('#notice-reg').removeClass('success-login');
				 $('#notice-reg').addClass('fail-login');
				 $('#notice-reg').html('Username of 8 or more character required!');		 
		 }else{
			  if(password.length < 8) {
				  $('#notice-reg').removeClass('success-login');
		          $('#notice-reg').addClass('fail-login');
		          $('#notice-reg').html('Password of 8 or more character required!');	 
		 	} else 	{
				if (password != repass){
				  $('#notice-reg').removeClass('success-login');
		          $('#notice-reg').addClass('fail-login');
		          $('#notice-reg').html('Re-Password is incorrect');	 
					 }
				else {
					if(fullname == ''){
						fullname = 'no name';
						}
					if(email == ''){
						email = 'no email';
						} 
					var formdata = {
							username: username,
							password: password,
							email: email,
							fullname: fullname
					};
					$.ajax({
			             type: 'POST',
			             url: 'admin/user/register/createnew',
			             data: formdata,
			             success: function(data){ 
			                 if(data=="success"){
			                	 $('#notice-reg').html('Registration success... Please wait');
			                	 $('#notice-reg').removeClass('fail-login');
			                	 $('#notice-reg').addClass('success-login');
			                	 $('#form_new_username').val('');
			             		 $('#form_new_password').val('');
			             	 	 $('#form_new_repass').val('');
			             		 $('#form_new_fullname').val('');
			             		 $('#form_new_email').val('');   
			                	 setTimeout(function(){  
			                		 $('#notice-reg').removeClass('success-login');
			                		 $('#notice-reg').html('Register');
			                		 window.location.href = "#/tab/main";
			                		}, 2000);
			                	 			                	
			                 }else{
			                	  $('#notice-reg').removeClass('success-login');
				   		          $('#notice-reg').addClass('fail-login');
				   		        
			                 }
			            },
				            	error: function(xhr, status, error){
				            		  $('#notice-reg').removeClass('success-login');
					   		          $('#notice-reg').addClass('fail-login');
					   		       $('#notice-reg').html('Username already exist! Chose another username');
					   		        
				        },
			          }); 
						
					 }	
		 	}	
		 } 
	   }
 //
 function showPopup(){
	 angular.element(document.getElementById('HomeCtrl')).scope().get(); 
 }
 function loginAction(){
	    
		var username = $('#username').val();
		var password= $('#password').val();		 
		var formdata =  {
	        	  mk_password: password,
	        	  username: username
	        	 };
		$.ajax({
          type: 'POST',           
          url: 'admin/login/setLogin',
          data: formdata,
          success: function(data){ 
               if(data=="success"){
              	 $('#notice-login').html('Login success... Please wait');
              	 $('#notice-login').removeClass('fail-login');
              	 $('#notice-login').addClass('success-login'); 
              	 setTimeout(function(){  
              			window.location.href = "#/tab/home";
                  		window.location = document.URL;
                  		window.location.reload();  
              		}, 2000);
               }else{
              	 $('#notice-login').html('Login fail, check your Username and password !');
              	 $('#notice-login').removeClass('success-login');
              	 $('#notice-login').addClass('fail-login');
              	 window.location.reload();
              	 
               }
          }
        }); 
	   }

 