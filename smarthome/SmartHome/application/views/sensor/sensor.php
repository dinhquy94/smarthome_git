<ion-view title="Sensor">
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
    <ion-content class="padding make-color" > 
                <a class="item item-avatar item-icon-right" href="#/tab/tempdetail" >
                  <img src="<?php echo base_url(); ?>application/views/template/img/temp.png">
                  <h2>Temperature Sensor </h2>
                  <p>Temperature inside and outside </p>
                   <i class="icon ion-chevron-right icon-right"></i>
                </a>
              <a class="item item-avatar item-icon-right" href="#/tab/firealarm">
                  <img src="<?php echo base_url(); ?>application/views/template/img/fire.png">
                  <h2>Fire sensor</h2>
                  <p>No fire alarm detected - Safe</p>
                   <i class="icon ion-chevron-right icon-right"></i>
                </a>
              <a class="item item-avatar item-icon-right" href="#/tab/humidity">
                  <img src="<?php echo base_url(); ?>application/views/template/img/humid.png">
                  <h2>Himidity sensor</h2>
                  <p>Humidity 70% - Comfortable</p>
                   <i class="icon ion-chevron-right icon-right"></i>
                </a>
              <a class="item item-avatar item-icon-right" href="#">
                  <img src="<?php echo base_url(); ?>application/views/template/img/motion.png">
                  <h2>Motion sensor </h2>
                  <p>No motion detected, your home is safety</p>
                   <i class="icon ion-chevron-right icon-right"></i>
               </a>
              <a class="item item-avatar item-icon-right" href="#">
                  <img src="<?php echo base_url(); ?>application/views/template/img/rainning.png">
                  <h2>Rainning sensor</h2>
                  <p>It 's not raining right now</p>
                   <i class="icon ion-chevron-right icon-right"></i>
                </a>
                <a class="item item-avatar item-icon-right" href="#/tab/sensordetail">
                  <img src="<?php echo base_url(); ?>application/views/template/img/tempicon.png">
                  <h2>RealFeel Temperature </h2>
                  <p>Determine the human-perceived equivalent temperature</p>
                   <i class="icon ion-chevron-right icon-right"></i>
                </a>
			   
</div>
    </ion-content>
</ion-view>
<style>
.icon-right{
	color: #AAAAAA;
}
.make-color{
	background: #eee;
}
.liste-decorate{
padding: 5px;
}
 
</style>
