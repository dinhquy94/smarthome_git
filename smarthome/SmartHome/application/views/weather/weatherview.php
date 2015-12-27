       <div   class="tabs-striped tabs-top tabs-background-calm tabs-color-light">
    	<div   class="tabs small-tabs">
    	 
	      <a class="tab-item active" onclick="reloadweather()"  href="#/tab/weather">
	        <i style="font-size: 20px;"  class="icon ion-ios-partlysunny-outline"></i> 
	      </a>
	  
	      <a class="tab-item " href="#/tab/weather/setting">
	        <i style="font-size: 20px;" class="icon ion-wrench"></i>
	     
	     <a onclick="reloadweather()"><i style="float:right; margin-left: 10px; margin-top: 4px; font-size: 20px; z-index: 1" class="icon ion-refresh title-weather"></i></a>
 
    	</div>
  	</div>
 <ion-view title="Thời tiết" style="margin-top: 30px;">
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
          <ion-refresher 
		    pulling-text="Kéo để cập nhật"
		    on-refresh="doRefresh()"  > 
		  </ion-refresher>
		 <ion-list>
		    <ion-item ng-repeat="item in items"></ion-item>
	  	</ion-list>
    	 <div class="row" style="margin: 0px;">
			  <div class="col" style="text-align: center; "> 
			  <h4 id="locationweather" style=" color: white; font-weight: bold; margin-bottom: 5px;">Đang cập nhật...</h3>
			  <h6 id="date-time" style=" color: white;margin-top: 3px; " >Đang cập nhật...</h5>
			  </div> 
		 </div>  
		 <div class="row">
			  <div  class="col" style=" color: white; font-size: 150px; text-align: center; " >
					 <i id="main-icon" class="ion-ios-cloud"></i>
					 <div id="main-weather" style=" color: white;  font-weight: 600; font-size: 14px;">Đang cập nhật...</div>
			 </div>
			
			  <div  class="col">
				   <div>
					  	<label id="main-temp" style="font-size: 50px;" class="title-weather"></label>
					  	 
				   </div> 
				     <div>
					  	<label id="temp-min" class="title-weather"> ℃</label>
					  	<label id="temp-max" class="value-weather"> ℃</label>
				   </div>
				    <div>
					  	<label  class="title-weather">Độ ẩm:</label>
					  	<label id="humidity-forecast" class="value-weather"> % </label>
				   </div>
				   
				    <div>
					  	<label class="title-weather">Pressure:</label>
					  	<label id="pressure" class="value-weather"> % </label>
				   </div> 
				    <div>
					  	<label class="title-weather">Sunrise:</label>
					  	<label id="sunrise" class="value-weather"> AM </label>
				   </div>
				    	   <div>
					  	<label class="title-weather">Sunset:</label>
					  	<label id="sunset" class="value-weather"> PM </label>
				   </div>
				   <div>
					  	<label class="title-weather">Gió:</label>
					  	<i class="icon ion-paper-airplane title-weather"></i>
					  	<label id="windspeed" class="value-weather"> 0 km/h </label>
				   </div> 
			  </div>
			   
		 </div> 
		 
	   
  </ion-content> 
</ion-view>
<div class="bar bar-footer"  style=" height: 150px;margin-bottom: 45px; padding: 0px; border: 0px;">
<div style="width: 100% ; padding: 0px;" class="list" >
 
    <a  class="item item-avatar list-weather" href="#">
       <div style="float: left; width: 90px; font-size: 55px; margin-top: 0px;  text-align: center;"><i id="icon-day1" class="icon  ion-ios-cloud"></i></div>
       <div style="float: left;" >
      <h2 id="day1-day" style="color: white;">...</h2>
      <p id="day1-minmax" style="color: white;">...</p>
      </div>
    </a >  
     <a style=" background: #669999;" class="item item-avatar list-weather" href="#">
       <div class="list-icon"><i id="icon-day2" class="icon   ion-ios-cloudy"></i></div>
       <div style="float: left;" >
      <h2 id="day2-day" style="color: white;">...</h2>
      <p id="day2-minmax" style="color: white;">...</p>
      </div>
    </a >  
      <a  class="item item-avatar list-weather" href="#">
       <div class="list-icon"><i id="icon-day3" class="icon  ion-ios-rainy"></i></div>
       <div style="float: left;" >
      <h2 id="day3-day" style="color: white;">...</h2>
      <p id="day3-minmax" style="color: white;">... </p>
      </div>
    </a >  
   

</div>
    
</div>
 
 