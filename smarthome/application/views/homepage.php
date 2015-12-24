

<ion-view title="Authentication">
	    <ion-content style="background: #EEEEEE;" class="padding">
	  
			 <div class="list">  
			  <div class="card">
			  
			
 
			<div id="notice-login" class="item item-text-wrap"  >
		   		Login with your Miniserver ID		   		
		  		</div>
		  		</div>		  	 
				<label class="item item-input">
					<i style="float: left; margin-right: 10px; " class="icon ion-person ?>">
					</i>			     
					<input id="username" type="text" name="username">
				</label>
				<label class="item item-input">
					<i style="float: left; margin-right: 10px; " class="icon ion-locked ?>">
					</i>			     
					<input name="password" type="password">
				</label>				
			</div>
			<li class="item item-toggle">
				     Stay login
				     <label class="toggle toggle-balanced">
				       <input id="staylogin" type="checkbox">
				       <div class="track">
				         <div class="handle"></div>
				       </div>
				     </label>
				  </li>
			
				<button  class="button button-full button-calm"  onclick="loginAction()" >
				CONNECT
				</button>
			   
    </ion-content>
</ion-view>