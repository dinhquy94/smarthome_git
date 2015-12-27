<ion-view title="Setting">
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
    <ion-content class=""> 
   <div class="list">
	  <div class="item item-divider"> 
		</div>
	  <label class="item item-input item-select"> 
	    <div class="input-label">
	      Number of notifications
	    </div>
	    <select>
	    <?php for($i=0; $i<50; $i += 5): ?>
	      <option><?php echo $i; ?></option>
	       
	     <?php endfor; ?>
	    </select>
	  </label>
	<label class="item item-right "> 
	    <div class="input-label">
	      Delete after seen
	    </div>
	   <input type="checkbox" />
	  </label>

</div>
    </ion-content>
</ion-view>
<style>
.icon-recolor{
	color: #CC0000;
	 
}
</style>
