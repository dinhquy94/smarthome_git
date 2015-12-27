 smarthomemodule.controller('smarthub', function($http, $scope) {  
	  $scope.doRefresh = function() {
	    $http.get('')
	     .success(function(data) {
	    	 seach_hub();
	     })
	     .finally(function() {
	       // Stop the ion-refresher from spinning
	       $scope.$broadcast('scroll.refreshComplete');
	     });
	  }; 
	  
	 $.ajax({
         type: 'GET',           
         url: 'smarthub/smarthubController/loadData'   ,      
         success: function(data){ 
              $("#smarthub_data").html(data);
         } 
	});
 	} 
); 
 function Hub_SetRead(data, url){ 
		$.ajax({
	          type: 'POST',           
	          url: 'smarthub/smarthubController/setRead',
	          data: {
	        	  messagesId: data 
	        	 },
	          success: function(data){ 
	               if(data!="success"){ 
	            	   alert('Kiểm tra Internet');
	            	   
	               }else{
	            	   $("#icon-display").addClass('status-change'); 
	            	   window.location.href = "#/tab/"+ url;
	               }
	          }
		});
	 }
 function seach_hub(){
	if($("#smarthub_data").val() == ""){
	 var seachvalue = $("#value_seach_hub").val(); 
	 	$.ajax({
	          type: 'POST',     
	          url: 'smarthub/smarthubController/seachHub/' ,
	          data: {
	        	  seachvalue: seachvalue
	          },
	          success: function(data){ 
	        	  $("#smarthub_data").html(data);
	        	  seach_hub();
	          }
		});
	 }
 }