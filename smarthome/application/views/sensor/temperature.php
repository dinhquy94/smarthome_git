<ion-view title="Detail">
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
           <div class="list">
        <a class="item " style="background: url(http://demominiserver.loxone.com:7778/resources/Images/ActiveMiniserver/Menu/bg-black.jpg); background-size:cover; height: 300px;"  href="#">
                 
                    <div class="header-detail-thi" >
                   		 <img style = "width: 100px; height: 100px;" src="<?php echo base_url(); ?>application/views/template/img/climate.png">
                    </div>
                 <div class="label-detail-thi">
                 <div  class= "line-label-detail"><label id="weather-felling">...</label><label> Celcious</label></div>
                 <div class="line-below"><p>Currently</p></div>
                 </div> 
        </a> 
              <a class="item item-avatar" href="#">
                  <img src="<?php echo base_url(); ?>application/views/template/img/inside.png">
                  <h2>Temperature Inside </h2>
                  <p><label id="temp_inside">...</label> Celcious</p>
                </a>
                
                 <a class="item item-avatar" href="#">
                  <img src="<?php echo base_url(); ?>application/views/template/img/outside.png">
                  <h2>Temperature Outside </h2>
                  <p><label id="temp_outside">...</label> Celcious</p>
                </a>
             
             

</div>
    </ion-content>
</ion-view>
