<ion-view title="Home">
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
		<div class="list card"> 
		  <div class="item item-image">
		   <iframe width="100%" height="320px" src="https://www.youtube.com/embed/LmSXQxUooVQ" frameborder="0" allowfullscreen></iframe>
		  </div> 
		  <div class="divcolumn">
		  	<div class="divcolumn-2col">
		  		<i class="icon icon-restyle ion-android-radio-button-on"></i>
		  		<div class="font-restyle">Unlock door</div>
		  	</div>
		  	<div class="divcolumn-2col">
		  		<i class="icon icon-restyle ion-android-open"></i>
		  		<div class="font-restyle">Porch Lights</div>
		  	</div>
		  	 	<div class="divcolumn-2col">
		  		<i class="icon icon-restyle ion-log-in"></i>
		  		<div class="font-restyle">Last visitor</div>
		  	</div>
		  	  	<div class="divcolumn-2col ">
		  		<i class="icon icon-restyle ion-home"></i>
		  		<div class="font-restyle">Return home control</div>
		  	</div>
		 
		  </div>
		
		</div>
</ion-content>
</ion-view>
<style>
.font-restyle{
	font-weight: 600;
}
.icon-restyle{
	font-size: 25px;
}
.divcolumn-2col{
	color: rgba(0, 0, 0, 0.87);
	height: 50%;
	width: 50%;
	border-bottom: 2px solid #eee;
	border-right: 2px solid #eee;
	float: left;
	padding: 10px;
	text-align: center;
}
.divcolumn{
	width: 100%;
	height: 150px;
	border: 1px solid #eee;
	
}
.restyle{
	margin: 0px !important;
}
</style>