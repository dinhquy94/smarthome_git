

<ion-view title="Authentication" >
	    <ion-content style="background: #EEEEEE;" class="padding" >
	  
			 <div class="list">  
			  <div class="card">
				<div style="text-align: center;" id="notice-login" class="item item-text-wrap"  >
				          		 <img style = "width: 64px; height: 64px;" src="<?php echo base_url(); ?>application/views/template/img/app-icon.png">
				          		 <br>
			   		<b>Đăng nhập vào hệ thống</b>   		
			  	</div>
		  		</div>		  	 
					<label class="item item-input">
						<i  class="icon ion-person">
						</i>			     
						<input id="username" type="text" name="username">
					</label>
					<label class="item item-input">
						<i  class="icon ion-locked" >
						</i>			     
						<input id="password" name="password" type="password">
					</label>				
				</div>
			<li class="item item-toggle">
				     Lưu đăng nhập
				     <label class="toggle toggle-balanced">
				       <input id="staylogin" type="checkbox" checked="checked">
				       <div class="track">
				         <div class="handle"></div>
				       </div>
				     </label>
				  </li>			
				<button  class="button button-full button-calm"  onclick="loginAction()" >
				KẾT NỐI
				</button>
			   
    </ion-content>
</ion-view>