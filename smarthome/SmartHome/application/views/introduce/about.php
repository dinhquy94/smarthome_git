<ion-view title="About this app">
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
		         <a class="item " style="background: url(<?php echo base_url(); ?>application/views/template/img/bg-black.png); background-size:cover; height: 350px;, background-size: 100%, 100%;"  href="#">
		               <div class="header-detail-thi" >
		               <div >
	                   		 <img style = "width: 100px; height: 100px;" src="<?php echo base_url(); ?>application/views/template/img/app-icon.png">
	                    </div>
		                 <div>
		                 <div  class= "line-label-detail"><label  style="font-weight: bold; font-size: 17px; "  >Cloud Smart Home</label> </div>
		                 <div class="line-below"><p>1.2.1 (2015.09.30)</p></div>
		                 </div> 
		                 </div>
		         </a> 
				 <a class="item item-icon-left item-icon-right" href="#">
				 <i class="icon ion-android-textsms"></i>
				 Submit feedback
				 <i class="icon ion-chevron-right"></i>
				 </a>
				 <a class="item item-icon-left item-icon-right" href="#">
				 <i class="icon ion-home"></i>
				 View product homepage
				 <i class="icon ion-chevron-right"></i>
				 </a>
              

 
</div>


    </ion-content>
</ion-view>
