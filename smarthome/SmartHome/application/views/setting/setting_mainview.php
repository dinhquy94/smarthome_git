<ion-view title="Setting">
         <?php 
			$CI =& get_instance();
			$CI->load->library('core/user');
			if($CI->user->isLogin()){											  
			}else{
				echo ' <ion-content class="padding">
      						  <ul class="list">   
									<a href="#/tab/welcome" class="button icon-right ion-chevron-right button-calm">Please login to home</a>
					
							 </ul>
						</ion-content>
					';
				exit;
			}
		?>
    <ion-content class=""> 
           <div class="list">
		           <div class="item item-divider"> 
				   </div>
				 <div class="item item-icon-left item-icon-right" href="#">
				 <i class="icon ion-android-notifications icon-recolor"></i>
				 <li class=" item-toggle">
				     Burglar alarm
				     <label class="toggle toggle-balanced">
				       <input type="checkbox">
				       <div class="track">
				         <div class="handle"></div>
				       </div>
				     </label>
				  </li>
				 </div> 
			    <div class="item item-divider"> 
			 </div> 
				  <a class="item item-icon-left item-icon-right" href="#">
				    <i style="color: #FF9900;" class="icon ion-ipad"></i>
				    Device setting
				    <i style="color: #AAAAAA" class="icon ion-ios-arrow-right"></i>
				  </a>
				  <a class="item item-icon-left item-icon-right" href="#/tab/weather/setting">
				    <i style="color: green;" class="icon ion-ios-partlysunny"></i>
				    Weather
				    <i style="color: #AAAAAA" class="icon ion-ios-arrow-right"></i>
				  </a>
				    <a class="item item-icon-left item-icon-right" href="#">
				    <i style="color: green;" class="icon ion-android-list"></i>
				    Sensor
				    <i style="color: #AAAAAA" class="icon ion-ios-arrow-right"></i>
				  </a>
				    <a class="item item-icon-left item-icon-right" href="#">
				    <i style="color: blue;" class="icon ion-email"></i>
				   Account / Messenger
				    <i style="color: #AAAAAA" class="icon ion-ios-arrow-right"></i>
				  </a>
				  <div class="item item-divider">
				 </div> 
					<a class="item item-icon-left item-icon-right" href="#">
				    <i style="color: green;" class="icon ion-flag"></i>
				    Notification
				    <i style="color: #AAAAAA" class="icon ion-ios-arrow-right"></i>
				  </a>
				   <div class="item item-divider">
				   Application
				 </div>	
				   	<a class="item item-icon-left item-icon-right" href="#">
				    <i style="color: red;" class="icon ion-wifi"></i>
				    View server status
				    <i style="color: #AAAAAA" class="icon ion-ios-arrow-right"></i>
				  </a>
				  	<a class="item item-icon-left item-icon-right" href="#">
				    <i style="color: red;" class="icon ion-card"></i>
				    About this app
				    <i style="color: #AAAAAA" class="icon ion-ios-arrow-right"></i>
				  </a>	   
			</div> 
    </ion-content>
</ion-view>
<style>
.icon-recolor{
	color: #CC0000;
	 
}
</style>
