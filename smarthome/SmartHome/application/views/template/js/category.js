smarthomemodule.controller('HomeCtrl', function($scope, $ionicPopup,  $ionicLoading) { 
		/*    $ionicLoading.show({
				      template: 'Loading...'
				    });
		    setTimeout(function(){ 
		    	$(document).ready(function(){
		  	 $ionicLoading.hide(); 
		  		 });
		    	if(user_name != ''){
		    		var alertPopup = $ionicPopup.alert({
		    	     title: 'Hi ' + realname,
		    	     template: 'Welcome to your EZsmarthome!'
		    	   });
		    	}
		    }, 3000);
		   // $(document).ready(function(){
		  //  $ionicLoading.hide(); 
		   // });
		    */
 
});
smarthomemodule.controller('notif', function($scope, $ionicSideMenuDelegate) {
	
	  $scope.toggleLeft = function() {
		    $ionicSideMenuDelegate.toggleLeft();
		  };
		}
);
 smarthomemodule.controller('BurglarAlarm', function($scope, $ionicSideMenuDelegate) {
	  $scope.toggleLeft = function() {
		    $ionicSideMenuDelegate.toggleLeft();
		  };
		} 
);
 smarthomemodule.controller('weatherUpdate', function($scope, $ionicSideMenuDelegate, $http) {
	 
	 $scope.doRefresh = function() {
		    $http.get('')
		     .success(function(data) {
		    	 reloadweather();
		     })
		     .finally(function() {
		       // Stop the ion-refresher from spinning
		       $scope.$broadcast('scroll.refreshComplete');
		     });
		  };      
 	} 
); 
  smarthomemodule.controller('messenger', function($scope, $ionicSideMenuDelegate) {
	 $scope.loadmessage_controller = function() {
		 loadmessage();
		 window.setTimeout( $scope.loadmessage_controller, 2000);
		  };
		  $scope.loadmessage_controller();	
 	} 
); 
 