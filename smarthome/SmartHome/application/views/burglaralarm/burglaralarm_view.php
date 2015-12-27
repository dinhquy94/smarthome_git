<ion-view title="Burglar Alarm">
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
    <ion-content  >
    
           <div class="list">
		         <div class="item main-status"   href="#"> 
	                    <div class="header-detail-thi" >
	                   		  <i class="icon icon-big ion-android-notifications-none" ></i>
	                    </div>
		                 <div class="label-detail-thi">
		                 <div  class= "line-label-detail"><label  style="font-weight: bold; font-size: 17px; "  >Alarm is armed</label> </div>
		                 
		                 </div> 
		         </div> 
				 <li class="item item-toggle">
				     Arm // Disarm
				     <label class="toggle toggle-assertive">
				       <input type="checkbox">
				       <div class="track">
				         <div class="handle"></div>
				       </div>
				     </label>
				  </li> 
				 <a ng-click="setAcknowledge" class="item  item-icon-right" href="#"> 
				 Acknowledge Alarm 
				 <i style="color: #AAAAAA;" class="icon ion-android-radio-button-on"></i>
				 </a>
              

 
</div>


    </ion-content>
</ion-view>
<style>
.icon-big{
	font-size: 150px;
	color: #eee;
}
.main-status{
	background: #83b817;
	background-size:cover;
	height: 350px;, 
	background-size: 100%, 100%;
	 
}

</style>