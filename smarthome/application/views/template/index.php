<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html ng-app="smarthome">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>Smarthome Controller</title>
        <script type="text/javascript">
             var room = <?php echo json_encode($rooms ); ?>;   
        </script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>application/views/template/css/home.css"> 
        <link href="<?php echo base_url(); ?>application/views/template/lib/ionic/css/ionic.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>application/views/template/css/style.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>application/views/template/lib/ionic/js/ionic.bundle.min.js"></script>   
        <script src="<?php echo base_url(); ?>application/views/template/js/script.js"></script> 
        <script src="<?php echo base_url(); ?>application/views/template/lib/jquery/jquery-1.11.3.js"></script> 
        <script src="<?php echo base_url(); ?>application/views/template/js/control.js"></script>
</head>
  <ion-nav-bar class="nav-title-slide-ios7 bar-balanced">
    <ion-nav-back-button class="button-icon ion-chevron-left">
      </ion-nav-back-button>   
    </ion-nav-bar>
  <ion-nav-view animation="slide-left-right"></ion-nav-view>
  <body class="light-mode">
  <script>
   
        
   function CheckForChange(){
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
                  var result = JSON.parse(data);
                  for(var i = 0; i< result.length ; i++){
                      if(result[i].status == "ON"){
                         $('#'+ result[i].port).prop('checked', true);
                      }else{
                         $('#'+ result[i].port).prop('checked', false);
                      }    
                  }  
                  window.setTimeout(CheckForChange, 50);            
               }
             });  
   }
   CheckForChange();
   function loginAction(){
		var username = $('#username').val();
		var password= $('#password').val();		
		$.ajax({
             type: 'POST',
             url: 'admin/login/setLogin/'+ username + '/' + $("input[name='password']").val() ,
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
  </script>
  <script id="tabs.html" type="text/ng-template">
    <ion-tabs class="tabs-icon-top tabs-balanced">
    
      <ion-tab title="Home" icon="ion-home" href="#/tab/home">
        <ion-nav-view name="home-tab"></ion-nav-view>
      </ion-tab>
      
       <ion-tab title="Sensor" icon="ion-ios-color-filter" href="#/tab/sensor">
        <ion-nav-view name="sensor-tab"></ion-nav-view>
      </ion-tab>

      <ion-tab title="Room" icon="ion-ios-keypad" href="#/tab/room">
        <ion-nav-view name="room-tab"></ion-nav-view>
      </ion-tab>

      <ion-tab title="Menu" icon="ion-ios-albums-outline" ui-sref="tabs.main">
        <ion-nav-view name="main-tab"></ion-nav-view>
      </ion-tab>
	<ion-tab hidden="true" ui-sref="tabs.welcome" >
        <ion-nav-view name="welcome-tab"></ion-nav-view>
     </ion-tab>

    </ion-tabs>
  </script>

    
</body>
</html>
<?php 
$CI =& get_instance();
$CI->load->library('core/user');
if($CI->user->isLogin()){
	  
}else{
	echo '<script>
		window.location.href = "#/tab/welcome";		
		</script>';
}
?>
