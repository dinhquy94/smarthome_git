angular.module('smarthome', ['ionic'])

.config(function($ionicConfigProvider) {
    $ionicConfigProvider.tabs.position('bottom');
})
.config(function ($stateProvider, $urlRouterProvider) {    
    for(var i = 0; i< room.length ; i++){
         $stateProvider
        .state('tabs.device' + room[i].RoomId, {
          url: "/device" + room[i].RoomId,
          views: {
            'room-tab': {
              templateUrl: "room/device/" + room[i].RoomId
            }
          }
        })
    }
    // Default Value
 
  $stateProvider
    .state('tabs', {
      url: "/tab",
      abstract: true,
      templateUrl: "tabs.html"
    })
    .state('tabs.home', {
      url: "/home",
      views: {
        'home-tab': {
          templateUrl: "room/home/",
          controller: 'HomeTabCtrl'
        }
      }
    })
      .state('tabs.welcome', {
      url: "/welcome",
      views: {
        'welcome-tab': {
          templateUrl: "main/homepage"          
        }
      }
    })

    .state('tabs.room', {
      url: "/room",
      views: {
        'room-tab': {
          templateUrl: "room/room"
        }
      }
    })
        .state('tabs.sensor', {
      url: "/sensor",
      views: {
        'sensor-tab': {
          templateUrl: "main/sensor"
        }
      }
    })
    .state('tabs.tempdetail', {
        url: "/tempdetail",
        views: {
          'sensor-tab': {
            templateUrl: "main/tempdetail"
          }
        }
      })
          .state('tabs.humidity', {
        url: "/humidity",
        views: {
          'sensor-tab': {
            templateUrl: "main/humidity"
          }
        }
      })
       .state('tabs.firealarm', {
        url: "/firealarm",
        views: {
          'sensor-tab': {
            templateUrl: "main/firealarm"
          }
        }
      })
    .state('tabs.sensordetail', {
      url: "/sensordetail",
      views: {
        'sensor-tab': {
          templateUrl: "main/sensordetail"
        }
      }
    })
        .state('tabs.main', {
      url: "/main",
      views: {
        'main-tab': {
          templateUrl: "main"
        }
      }
    })

    $urlRouterProvider.otherwise("/tab/home");
   // $urlRouterProvider.otherwise("/tab/home");


})

.controller('HomeTabCtrl', function ($scope) {
  console.log('HomeTabCtrl');
});
