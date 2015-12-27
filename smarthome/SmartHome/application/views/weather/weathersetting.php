       <div   class="tabs-striped tabs-top tabs-background-calm tabs-color-light">
    	<div  style="max-height: 30px; line-height: 0px;"  class="tabs">
    	 
	      <a class="tab-item"   href="#/tab/weather">
	        <i style="font-size: 20px;"  class="icon ion-ios-partlysunny-outline"></i> 
	      </a>
	  
	      <a class="tab-item active " href="#/tab/weather/setting">
	        <i style="font-size: 20px;" class="icon ion-wrench"></i>
	     </a>
	      	</div>
  	</div>
  	
  	<ion-view   title="Weather" style="margin-top: 30px;">
  	
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
    <ion-content class="padding" style="background: #3baeda"> 
  

	<div class="list">
	
	  <label class="item item-input item-select">
	    <div class="input-label">
	       Chose your Region
	    </div>
	    <select id="region" onchange="loadcountries()">
	     <option selected><?php echo $saved['LocationRegion'] ?></option>  
	    <?php foreach ($region as $regionlist): ?>
	    <?php if($regionlist != $saved['LocationRegion']) :?>
	      <option><?php echo $regionlist ?></option>
	    <?php endif; ?>
	      <?php endforeach; ?> 
	    </select>
	  </label>
  
<!-- Modal -->
 
	  <label class="item item-input item-select">
	    <div class="input-label">
	    	  Your Country 
	    </div>
	    <select id="countries" onchange="loadstate()">
	       <option selected><?php echo $saved['LocationCountry'] ?></option>  
	        
	    <?php foreach ($country as $countrylist): ?>
	    <?php if($countrylist != $saved['LocationCountry']) :?>
	      <option><?php echo $countrylist ?></option>
	    <?php endif; ?>
	      <?php endforeach; ?> 
	    </select>
	  </label> 
	  <label class="item item-input item-select">
	    <div class="input-label">
	      City/State
	    </div>
	    <select id="state">
	      <option selected><?php echo $saved['LocationState'] ?></option>   
	    <?php foreach ($state as $statelist): ?>
	    <?php if($statelist != $saved['LocationState'] || $statelist != '' ) :?>
	      <option><?php echo $statelist ?></option>
	    <?php endif; ?>
	      <?php endforeach; ?> 
	    </select>
	  </label>
	
	</div>
	<div class="list"> 
	  <label class="item item-input item-select">
	    <div class="input-label">
	       Temperature format 
	    </div>
	    <select id="temptype"> 
	    <?php if ($saved['TempType'] == 'Celcious'): ?>
	      <option selected>Celcious</option>
	      <option>Ferahit</option>
	      <?php else: ?>
	  	  <option >Celcious</option>
	      <option selected>Ferahit</option>
	      <?php endif; ?>
	    </select>
	  </label>
	  	  <label class="item item-input item-select">
	    <div class="input-label">
	      Timezone
	    </div>
	    <select id="timezone"> 
	     <option selected><?php echo $saved['Timezone']; ?></option>
	    <?php  foreach ($timezone as $name=>$zone):?>
	    <?php if ($saved['Timezone'] != $name): ?> 
	      <option><?php echo $name; ?></option> 
	      <?php endif; ?>
	      <?php endforeach;?>
	    </select>
	  </label>
 </div>
 <button onclick="saveweathersetting()" class="button button-block button-positive">
Save all changes
</button>
 
 </ion-content>
 </ion-view>
 
 