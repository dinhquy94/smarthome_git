 <ion-view title="Accounts">
 
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
    <ion-content  class="padding"> 
      	   <div class="card">
				<div   id="notice-reg" class="item item-text-wrap"  >
			   Manage all account on your home	 
			  	</div> 
		  		</div>	
 				<div class="account-list" style="color: #28a54c">
 				<?php foreach ($datauser as $user): ?>
 			 	 <a  class="item item-icon-left item-icon-right" href="#/tab/accountdetail/<?php echo $user['username']  ?>">
				 <i style="font-size: 35px; color: #424242" class="icon ion-person"></i>
					<?php echo $user['username'] ;?> 
					<div style="font-size: 12px;"><?php  if($user['RealName'] == "") echo "No name"; else echo $user['RealName']  ; ?></div>
				 <i style="font-size: 20px; color: #28a54c" class="icon ion-chevron-right"></i>
				 </a>
				 <?php endforeach; ?>
 				</div>
    </ion-content>
</ion-view>
 