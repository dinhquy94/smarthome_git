<ion-view title="Creat new account">
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
				<div id="notice-reg" class="item item-text-wrap"  >
			   		Create new account to your home controller	   		
			  	</div>
		  		</div>	
		  <label class="item item-input item-stacked-label">
		  <i style="float: left; margin-right: 10px; " class="icon ion-person ?>">
		  </i>	
		    <span class="input-label">Username</span>
		    <input type="text" id="form_new_username" name = "new_username" placeholder="Username of 8 or more character required!">
		  </label>
		  <label class="item item-input item-stacked-label">
		    <i style="float: left; margin-right: 10px; " class="icon ion-locked  ?>">
			</i>	
		    <span class="input-label">Password</span>
		    <input type="password" name="new_pass" id="form_new_password"  value="" placeholder="Password of 8 or more character required!">
		  </label>
		   
		    <label class="item item-input item-stacked-label">
		     <i style="float: left; margin-right: 10px; " class="icon ion-lock-combination ?>">
			</i>
		    <span class="input-label">Re-Password</span>
		    <input id="form_new_repass" type="password" name=  placeholder="******">
		  </label>
		  <label class="item item-input item-stacked-label">
		   <i style="float: left; margin-right: 10px; " class="icon ion-happy ?>">
			</i>
		    <span class="input-label">Full Name</span>
		    <input id="form_new_fullname" type="text" placeholder="Suhr">
		  </label>
		  <label class="item item-input item-stacked-label">
		   <i style="float: left; margin-right: 10px; " class="icon ion-email-unread ?>">
			</i>
		    <span class="input-label">Email</span>  
		    <input id="form_new_email" type="text" placeholder="john@suhr.com">
		  </label>
		  <button onclick="creatNewUser()" class="button button-block button-positive">
		  Creat account
		</button>
    </ion-content>
</ion-view>
