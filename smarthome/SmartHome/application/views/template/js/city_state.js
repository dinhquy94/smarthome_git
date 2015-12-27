function loadcountries(){
	var region = $('#region').val();
	$.ajax({
        type: 'POST',
        data: {
       	 region: region
        },
        url: 'weather/weatherController/getContries/',
        success: function(data){ 
       	 $('#countries').html(data);
       }
     }); 
}
//
function reloadweather(){
	 $.ajax({
	        type: 'GET', 
	        url: 'weather/weatherController/getCurrentWeather',
	        success: function(data){ 
	        var result = JSON.parse(data); 
	        var symbol = '';
	        if(result.type == 'Celcious'){
	        	symbol = '℃ ';
	        }else{
	        	symbol = '°F';
	        }
	       	 $('#locationweather').html(result.state + ', ' + result.country);
	       	 $('#humidity-forecast').html(result.humidity + '% ' );
	       	 $('#temp-max').html(Math.floor(result.day0.max) + symbol );
			$('#temp-min').html(Math.floor(result.day0.min)+ symbol );
			$('#main-temp').html(Math.floor(result.temp) + symbol);
			$('#pressure').html(result.pressure + ' mPa ' );
			$('#sunrise').html(result.sunrise + ' AM' );
			$('#sunset').html(result.sunset + ' PM' );
			$('#windspeed').html(result.windspeed + 'km/h ' ); 
			//main-weather	
			$('#date-time').html(result.datetime); 
			$('#main-weather').html('Sky is ' + result.main ); 
			$('#day1-minmax').html('High: '+ Math.floor(result.day1.max) + symbol + ' Low: ' + Math.floor(result.day1.min) +symbol); 
			$('#day2-minmax').html('High: '+ Math.floor(result.day2.max) + symbol + ' Low: ' + Math.floor(result.day2.min) +symbol); 
			$('#day3-minmax').html('High: '+ Math.floor(result.day3.max) + symbol + ' Low: ' + Math.floor(result.day3.min) +symbol); 
			$('#day3-day').html(result.day3.dt); 
			$('#day2-day').html(result.day2.dt); 
			$('#day1-day').html(result.day1.dt); 
			//icon changing
			$('#main-icon').removeClass('ion-ios-cloud');
			$('#main-icon').removeClass('ion-ios-rainy'); 
			$('#main-icon').removeClass('ion-ios-rainy'); 
			if(result.main == 'Clouds'){
				$('#main-icon').addClass('ion-ios-cloud');
			}else{
				if(result.main == 'Rain'){
					$('#main-icon').addClass('ion-ios-rainy');
				}else{
					$('#main-icon').addClass('ion-ios-sunny');
				}
			}
			for(var i= 1; i<4; i++){
				$('#icon-day'+i).removeClass('ion-ios-cloud');
				$('#icon-day'+i).removeClass('ion-ios-rainy'); 
				$('#icon-day'+i).removeClass('ion-ios-sunny'); 
				if(result.day+'i'.main == 'Clouds'){
					//id="icon-day2"
					$('#icon-day'+i).addClass('ion-ios-cloud');
				}else{
					if(result.main == 'Rain'){
						$('#icon-day' + i).addClass('ion-ios-rainy');
					}else{
						$('#icon-day'+i).addClass('ion-ios-sunny');
					}
				}
			}
			  window.setTimeout(reloadweather, 1000);       
			//changing day1  
	       }
	     }); 
}
reloadweather();
function loadstate(){
	var countries = $('#countries').val();
	$.ajax({
        type: 'POST',
        data: {
        	country: countries
        },
        url: 'weather/weatherController/getState/',
        success: function(data){ 
       	 $('#state').html(data);
       }
     }); 
}
function saveweathersetting(){ 
	var countries = $('#countries').val();
	var region = $('#region').val();
	var state = $('#state').val();
	var type = $('#temptype').val();
	var timezone = $('#timezone').val(); 
	$('#countries').val(countries);
    $('#region').val(region);
    $('#state').val(state);
    $('#temptype').val(type); 
    $('#timezone').val(timezone);    
		if( countries.trim() == ''){
			$('#notif').html('Please select your country');  
		}else{
			if( state.trim() == ''){
				$('#notif').html('Please select your state');  
			}else{
				$.ajax({
			        type: 'POST',
			        data: {
			        	country: countries,
			        	region: region,
			        	state: state,
			        	type: type,
			        	timezone: timezone
			        },
			        url: 'weather/weatherController/updatesetting/',
			        success: function(data){  
			        	$('#notif').html('  Enter your location to update weather forecast. Please enter all fields bellow exactly!'); 
			        	window.location.href = "#/tab/weather";  
						reloadweather(); 
				    }
			     });  
			}
		} 
}
