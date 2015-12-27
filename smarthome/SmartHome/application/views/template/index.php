<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html >
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>Smarthome Controller</title>
        <script type="text/javascript">
             var room = <?php echo json_encode($rooms ); ?>;   
             var categories = <?php echo json_encode($categories) ;?>;
          //   console.log(categories);
        </script> 
		<script src="../application/views/template/lib/jquery/jquery-1.11.3.js"></script>  
        <script src="../application/views/template/js/messenger.js"></script>
        <link href="../application/views/template/css/bootstrap.css" rel="stylesheet"> 
        <link href="../application/views/template/lib/ionic/css/ionic.min.css" rel="stylesheet">
        <link href="../application/views/template/css/style.css" rel="stylesheet">
        <script src="../application/views/template/js/bootstrap.min.js"></script>   
        <script src="../application/views/template/lib/ionic/js/ionic.bundle.min.js"></script> 
        <script src="../application/views/template/js/script.js"></script>  
        <script src="../application/views/template/js/category.js"></script>   
        <script src="../application/views/template/js/setting.js"></script>  
        <script src="../application/views/template/js/smarthub.js"></script>    
        <script src="../application/views/template/js/control.js"></script>
        <script type="text/javascript" src="../application/views/template/js/city_state.js"></script>
</head>
   <ion-side-menus>
        
        <ion-side-menu-content>
          <ion-nav-bar class="bar-balanced">
            <ion-nav-back-button class="button-icon ion-android-arrow-back">
            </ion-nav-back-button>
            <ion-nav-buttons side="right">
        <a href="#/tab/smarthub" class="button button-clear " >
           <i class="ion-email-unread" style="font-size: 30px;"></i>            
        </a>
    </ion-nav-buttons>
          </ion-nav-bar>
          <ion-nav-buttons side="left">
            <button class="button button-icon button-clear ion-navicon" ng-click="toggleLeft()">
            </button>
          </ion-nav-buttons>
           <ion-nav-view animation="slide-left-right"></ion-nav-view>
        </ion-side-menu-content>  
        <ion-side-menu side="left">
          <ion-header-bar class="bar-energized">
            <h1 class="title">Quick Menu</h1>
          </ion-header-bar>
          <ion-content>
             <div class="list card">
                <a href="#/tab/home" class="item item-icon-left">
                <i style="color: blue" class="icon ion-home"></i>
                Enter home  
                </a>
                <a href="#/tab/smarthub" class="item item-icon-left">
                <i style="color: red" class="icon ion-email-unread"></i>
                Notification  
                </a>
                <a href="#/tab/event"  class="item item-icon-left">
                <i style="color: green"  class="icon ion-leaf"></i>
                Event
                </a>
                <div class="item item-divider">
				Favourites
				 </div>   
				 <a href="#/tab/ipcamera" class="item item-icon-left">
                <i class="icon ion-share"></i>
                Door manage  
                </a>  
                <a href="#/tab/burglaralarm" class="item item-icon-left">
                <i class="icon ion-android-notifications"></i>
                Burglar Alarm 
                </a>
                 <a href="#/tab/weather" class="item item-icon-left">
                <i style="color: #3baeda" class="icon ion-ios-partlysunny-outline"></i>
                Home weather
                </a>
                   <a href="#/tab/remote" class="item item-icon-left">
                <i style="color: #3baeda" class="icon ion-coffee"></i>
                Remote
                </a>
                <a href="#/tab/messenger" class="item item-icon-left">
                <i class="icon ion-chatboxes"></i>
                Chat with home  
                </a>   
                <div class="item item-divider">
				 
				 </div> 
				  
       		 </div>
          </ion-content>
        </ion-side-menu>
      </ion-side-menus>

  
  
  <body  ng-app="smarthome"  class="light-mode"  >
 	 
  
  <script id="tabs.html" type="text/ng-template"> 
    <ion-tabs   class="tabs-icon-top tabs-dark"> 
      <ion-tab title="Home"  icon="ion-home" href="#/tab/home">
        <ion-nav-view name="home-tab"></ion-nav-view>
      </ion-tab>
      
       <ion-tab title="Sensor"icon="ion-ios-color-filter" href="#/tab/sensor">
        <ion-nav-view name="sensor-tab"   ></ion-nav-view>
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
	<ion-tab hidden="true" ui-sref="tabs.smarthub" >
        <ion-nav-view name="smarthub-tab"></ion-nav-view>
     </ion-tab>
<ion-tab hidden="true" ui-sref="tabs.notification" >
        <ion-nav-view name="setting-tab"></ion-nav-view>
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
