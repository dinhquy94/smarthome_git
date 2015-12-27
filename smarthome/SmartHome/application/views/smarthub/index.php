<ion-view title="Notification center">

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
		<div style="margin-top: 43px;" class="bar bar-header item-input-inset">
		  <label class="item-input-wrapper">
		    <i class="icon ion-ios-search placeholder-icon"></i>
		    <input onchange="seach_hub();" id="value_seach_hub" type="search" placeholder="Search">
		  </label>
		  <button class="button button-clear" >
		    Seach
		  </button>
		</div>
    <ion-content> 
      <ion-refresher 
	    pulling-text="Kéo để cập nhật"
	    on-refresh="doRefresh()"  > 
	  </ion-refresher>
	 <ion-list>
	    <ion-item ng-repeat="item in items"></ion-item>
  	</ion-list>
    <div id='smarthub_data'>
	 
 	</div>
    </ion-content>
</ion-view>
	<!-- <div onclick="seach_hub()" class="bar bar-footer"  style=" height: 40px;margin-bottom: 45px; padding: 0px; border: 0px;">
	<div  style="width: 100% ; padding: 0px; text-align: center;" class="list" > 
	    <a >
	    	<i class="ion-loop" style="font-size: 30px;"></i>
	    </a> 
	</div> 
	</div>
	 -->
<<style>
.status-change{
	color: #b3b3b3;
}
</style>

