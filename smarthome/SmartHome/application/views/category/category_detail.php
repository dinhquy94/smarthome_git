 <ion-view id = "devicec" title="<?php echo $categoryid  ;  ?>">
         <?php 
			$CI =& get_instance();
			$CI->load->library('core/user');
			$CI->load->model('category/category_model');
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
			<?php $i = 0; $j = 0; $count = 0; ?>  			  
				<?php foreach( $rooms as $room): ?>	 
		     	 	<?php $count += $CI->category_model->isEmptyDevice($categoryid, $room['RoomId']); ?>
		     
				<?php endforeach; ?>
					 	<?php if($count ==0): ?>  
					 	 <div style="text-align: center;   margin-top: 50px;"><?php if($i==0 && $j ==0  ){ echo '<img style = "width: 64px; height: 64px;" src="'.base_url().'application/views/template/img/app-icon.png">
						          		 <br>No device in this Category '; $i++ ; }?></div>
					 <?php endif; ?> 
			<?php $count = 0; ?>
     	 	<?php foreach( $rooms as $room): ?>	 
		     	 	<?php $count = $CI->category_model->isEmptyDevice($categoryid, $room['RoomId']); ?>
		     	 	<?php if($count !=0): ?> 
			     	 	<div class="item item-divider">
						    <?php echo $room['RoomName']; $j++;    ?>
						 </div>
					 <?php endif; ?>
					 	<?php foreach($device as $item): ?>
					 		<?php if($item['RoomId'] == $room['RoomId'] && $item['DeviceCatagory'] == $categoryid)  : ?>
						       
						            <li class="item item-toggle">
						            <i style="float: left; margin-right: 10px; color: SandyBrown; font-size: 25px;" class="icon <?php echo $item['icon']; ?>"></i>
						            <?php echo $item['DeviceName']; ?>
						                <label class="toggle toggle-balanced "> 
						                    <input id="<?php echo $item['IdPort']; ?>" type="checkbox"  onchange="turnOnDevice('<?php echo $item['IdPort']; ?>')">
						                 	<div class="track">
						                         <div class="handle"></div>
						                    </div>
						                </label> 
						            </li> 
						            <?php if($item['DeviceType'] == 'custom'): ?>
						             <div  style="display:none" id="<?php echo 'custom'.$item['IdPort'] ?>"  class="item range range-positive"  >             
										    <i  class="icon ion-arrow-left-b" ></i>
										    <input type="range" name="volume" min="0" max="100" value="33"  onchange="demo()" >
										    <i class="icon ion-arrow-right-b"></i>
										  </div> 
									<?php endif ; ?>
						       
				 			 	 
				 			 	 
				 			 	 
				 			 	 
				 			 	 
						 <?php endif; ?>
				 	 <?php endforeach; ?>
		 				</div> 
 				<?php endforeach; ?>
    </ion-content>
</ion-view>
