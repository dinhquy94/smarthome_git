var smarthomemodule = angular.module('smarthome', ['ionic']);

smarthomemodule.config(function($ionicConfigProvider) {
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
    
    for(var i = 0; i< categories.length ; i++){
        $stateProvider
       .state('tabs.' + categories[i].CategoryId, {
         url: "/device/" + categories[i].CategoryId,
         views: {
           'room-tab': {
             templateUrl: "category/categoryController/categoryDetail/" + categories[i].CategoryId
           }
         }
       })
   } 
  $stateProvider
    .state('tabs', {
      url: "/tab",
      abstract: true,
      templateUrl: "tabs.html",
      controller: "notif"   
    })
    .state('tabs.home', {
      url: "/home",
      views: {
        'home-tab': {
          templateUrl: "room/home/",
          controller: "HomeCtrl"   
         
        }
      }
    }) 
    .state('tabs.register', {
        url: "/register",
        views: {
          'main-tab': {
            templateUrl: "admin/user/register/"
          }
        }
      })
      .state('tabs.burglaralarm', {
        url: "/burglaralarm",
        views: {
          'sensor-tab': {
            templateUrl: "burglaralarm/burglaralarmController/index",
            controller: 'BurglarAlarm'
          }
        }
      })
          
       .state('tabs.event', {
        url: "/event",
        views: {
          'room-tab': {
            templateUrl: "event/eventController/index/"
          }
        }
      })
      .state('tabs.remote', {
        url: "/remote",
        views: {
          'sensor-tab': {
            templateUrl: "remote/remoteController/index",
            controller: "HomeCtrl"            
          }
        }
      })
        .state('tabs.manageaccount', {
        url: "/manageaccount",
        views: {
          'main-tab': {
            templateUrl: "admin/user/register/manageAccount/"
          }
        }
      })
         .state('tabs.category', {
        url: "/category",
        views: {
          'room-tab': {
            templateUrl: "category/categoryController/index/"
          }
        }
      })
             .state('tabs.weather', {
        url: "/weather",
        views: {
          'main-tab': {
            templateUrl: "weather/weatherController/index/",
            controller: "weatherUpdate"
          }
        }
      })
//settting
    .state('tabs.messenger', {
        url: "/messenger",
        views: {
          'welcome-tab': {
            templateUrl: "messenger/index/index/",
            controller: 'messenger'
          }
        }
      })
      .state('tabs.settting', {    	 
        url: "/weather/setting",
        views: {
          'main-tab': {
            templateUrl: "weather/weatherController/setting/"
          }
        }
      })
      .state('tabs.notification', {    	 
        url: "/setting/notification",
        views: {
          'setting-tab': {
            templateUrl: "setting/settingController/notification"
          }
        }
      })
      .state('tabs.ipcamera', {
        url: "/ipcamera",
        views: {
          'main-tab': {
            templateUrl: "room/ipcamera/"
          }
        }
      })
            .state('tabs.introduce', {
        url: "/introduce",
        views: {
          'main-tab': {
            templateUrl: "introduce/introduce/aboutthis"
          }
        }
      })
//introduce/introduce/aboutthis
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
     .state('tabs.setting', {
      url: "/setting",
      views: {
        'main-tab': {
          templateUrl: "setting/settingController/",
          controller: 'setting'
        }
      }
    })
    .state('tabs.smarthub', {
      url: "/smarthub",
      views: {
        'smarthub-tab': {
          templateUrl: "smarthub/smarthubController/",
          controller: 'smarthub'
        }
      }
    })
    

    $urlRouterProvider.otherwise("/tab/home");
   // $urlRouterProvider.otherwise("/tab/home");


})
