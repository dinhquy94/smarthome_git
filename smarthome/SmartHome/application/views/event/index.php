<ion-view title="Event manage">
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
    <ion-content  class="">  
    <div class="item item-divider">
 		 
	</div>
      <ul class="list"> 
      <?php foreach($allevent as $event):  ?>
       <!--  
      <div class="card" style="margin: 0px 0px 0px 0px; ">
	  <div class="item item-text-wrap" style="background: #D8FEDA;" >
	     <?php echo $event['Comment'] ?>
	  </div>
	</div> 
		-->
	  <li class="item item-checkbox item-icon-right" >
	     <label class="checkbox">
	       <input type="radio"  name=event>
	     </label>
	     <?php echo $event['eventName'] ?>
	     <i style="color: #FF9933" class="icon   <?php echo $event['eventIcon']; ?>"></i>
	  </li> 
	  <?php endforeach;; ?>
	</ul>
    </ion-content>
</ion-view>
