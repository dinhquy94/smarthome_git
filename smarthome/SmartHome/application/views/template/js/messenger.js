function uniCharCode(event) {
	    var x = event.which || event.keyCode;
	    if(x == 13){
	    	send_messageAction();
	    	$('#scroll-top').scrollTop($("#scroll-top").prop('scrollHeight'));
	    }
	} 
 var user_name = '';
 var realname = '';
 
 var avarta = '';
 $.ajax({
     type: 'POST',
     url: 'messenger/index/loadCurrenUser',
     success: function(data){ 	            	  
   	   var  user_data = JSON.parse(data);  
   	   user_name = user_data[0].username;
   	   avarta = user_data[0].profileImg;
   	   realname = user_data[0].RealName;
      }
  });
 
 function send_messageAction(){		
	 if($('#new_message').val() != ''){
		 var message_temp = $('#new_message').val()
		$('#new_message').val('');
		$('#main-message').append('<div class="message_temp" style="width: 100%; height: 100%; padding: 5px; float: right"> <img style=" border-radius: 50%; height: 40px; width: 40px ; margin-left: 8px;  margin-right: 8px;float: right;" src="../application/views/template/img/messenger/'+ avarta +'">	<div style="float: right; max-width: 70%" class="alert alert-info" role="alert">'+message_temp+'</div></div><br>');
		$('#scroll-top').scrollTop($('#scroll-top')[0].scrollHeight);
		$.ajax({
	         type: 'POST',
	         data: {
	        	 message: message_temp
	         },
	         url: 'messenger/index/sendMessage/',
	         success: function(data){
	        	// alert($('#scroll-top').scrollTop());
 	        }
	      });
	 } 
 } 
 //$.noConflict();
 jQuery(document).ready(function(){
	 jQuery('#scroll-top').scroll(function(){
	        alert('scroll'); 
	    }); 
	}); 
 function loadmessage(){
	 
 	   var _this = this;
	      $.ajax({
	              type: 'POST',
	              url: 'messenger/index/loadMessage/null/1',
	              success: function(data){ 	            	  
	            	  var result = JSON.parse(data); 
	            	  for(var i = 0; i< result.length ; i++){	             
	            		 if($('#message'+ result[i].Message_Id ).length == 0  ){ 
	            			 if(result[i].user == user_name){
	            				 $('.message_temp').hide();
		            			 $('#main-message').append('<div  id="message' + result[i].Message_Id + '"style="width: 100%; height: 100%; padding: 5px; float: right"> <img style=" border-radius: 50%; height: 40px; width: 40px ; margin-left: 8px;  margin-right: 8px;float: right;" src="../application/views/template/img/messenger/'+ result[i].profileImg +'">	<div style="float: right; max-width: 70%" class="alert alert-info" role="alert">'+result[i].message+'</div></div><br>');
 		            			 $('#scroll-top').scrollTop($("#scroll-top").prop('scrollHeight')); 
	            			 }else{	            				 
		            			 $('#main-message').append(' <div><div style = "float: left; font-size: 12px; margin-left: 60px; color: #BBBBBB; font-style: italic;">'+result[i].RealName+'</div></div><br><div id="message' + result[i].Message_Id + '"style="width: 100%; height: 100%; padding: 5px; float: left"> <img style=" border-radius: 50%; height: 40px; width: 40px ; margin-left: 8px;  margin-right: 8px;float: left;" src="../application/views/template/img/messenger/'+ result[i].profileImg +'">	<div style="float: left; max-width: 70%" class="alert alert-success" role="alert">'+result[i].message+'</div></div><br>');
 		            			 $('#scroll-top').scrollTop($("#scroll-top").prop('scrollHeight')); 
	            			 } 
	            		 }
	            	  }
	            	  
	              }
	           });
 }
 