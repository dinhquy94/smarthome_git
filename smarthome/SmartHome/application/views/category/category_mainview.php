        <div   class="tabs-striped tabs-top tabs-background-balanced tabs-color-light">
    	<div  style="max-height: 30px; line-height: 0px;"  class="tabs">
    	 
	      <a class="tab-item " href="#/tab/room">
	        <i style="font-size: 20px;"  class="icon ion-android-apps"></i>
	       
	      </a>
	  
	      <a class="tab-item active" href="#/tab/category">
	        <i style="font-size: 20px;" class="icon ion-social-buffer"></i>
	     
	      </a>    
	        <a class="tab-item " href="#/tab/event">
	        <i style="font-size: 20px;"  class="icon  ion-leaf"></i>
	       
	      </a>
    	</div>
  	</div>
 <ion-view style="margin-top: 30px;" id = "devicec" title="Category">
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
    <ion-content class="padding">  
     	 	<div class="account-list">
     	 	 <?php foreach ($categories as $category) : ?>
 			 	 <a class="item item-icon-left item-icon-right" href="#/tab/device/<?php echo $category['CategoryId'] ?>">
				 <i style="font-size: 25px; color: #28a54c;" class="icon <?php echo $category['icon'];  ?>" ></i>
					<?php echo $category['CategoryName']; ?>
				 <i style="font-size: 20px; color: #28a54c;" class="icon ion-chevron-right"  ></i>
				 </a>
		 	<?php endforeach ; ?>		 
 				</div> 
 				<div class="tabs-striped tabs-top tabs-background-positive tabs-color-light">
    </ion-content> 
</ion-view>
	