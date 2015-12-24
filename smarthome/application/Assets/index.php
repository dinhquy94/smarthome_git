<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html ng-app="smarthome">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title>Ionic Tabs and Navigation</title>
  <link href="application/views/template/lib/ionic/css/ionic.min.css" rel="stylesheet">
  <link href="application/views/template/style.css" rel="stylesheet">
  <script src="application/views/template/lib/ionic/js/ionic.bundle.min.js"></script>   
  <script src="application/views/template/js/script.js"></script> 
</head>
<body>

  <ion-nav-bar class="nav-title-slide-ios7 bar-balanced">
    <ion-nav-back-button class="button-icon ion-chevron-left">
    </ion-nav-back-button>
   
  </ion-nav-bar>
  <ion-nav-view animation="slide-left-right"></ion-nav-view>

  <script id="tabs.html" type="text/ng-template">
    <ion-tabs class="tabs-icon-top tabs-balanced">

      <ion-tab title="Home" icon="ion-home" href="#/tab/home">
        <ion-nav-view name="home-tab"></ion-nav-view>
      </ion-tab>

      <ion-tab title="About" icon="ion-chatbubble-working" href="#/tab/about">
        <ion-nav-view name="about-tab"></ion-nav-view>
      </ion-tab>

      <ion-tab title="Contact" icon="ion-person-stalker" ui-sref="tabs.contact">
        <ion-nav-view name="contact-tab"></ion-nav-view>
      </ion-tab>

    </ion-tabs>
  </script>

  <script id="home2.html" type="text/ng-template">
    <ion-view title="Home">
      <ion-content class="padding">
        <p>Example of Ionic tabs. Navigate to each tab, and
        navigate to child views of each tab and notice how
        each tab has its own navigation history.</p>
        <p>
          <a class="button icon icon-right ion-chevron-right" href="#/tab/facts">Scientific Facts</a>
        </p>
      </ion-content>
    </ion-view>
  </script>

  <script id="facts.html" type="text/ng-template">
    <ion-view title="Facts">
      <ion-content  class="padding">
        <p>Banging your head against a wall uses 150 calories an hour.</p>
        <p>Dogs have four toes on their hind feet, and five on their front feet.</p>
        <p>The ant can lift 50 times its own weight, can pull 30 times its own weight and always falls over on its right side when intoxicated.</p>
        <p>A cockroach will live nine days without it's head, before it starves to death.</p>
        <p>Polar bears are left handed.</p>
        <p>
          <a class="button icon ion-home" href="#/tab/home"> Home</a>
          <a class="button icon icon-right ion-chevron-right" href="#/tab/facts2">More Facts</a>
        </p>
      </ion-content>
    </ion-view>
  </script>

  <script id="facts2.html" type="text/ng-template">
    <ion-view title="Also Factual">
      <ion-content class="padding">
        <p>111,111,111 x 111,111,111 = 12,345,678,987,654,321</p>
        <p>1 in every 4 Americans has appeared on T.V.</p>
        <p>11% of the world is left-handed.</p>
        <p>1 in 8 Americans has worked at a McDonalds restaurant.</p>
        <p>$283,200 is the absolute highest amount of money you can win on Jeopardy.</p>
        <p>101 Dalmatians, Peter Pan, Lady and the Tramp, and Mulan are the only Disney cartoons where both parents are present and don't die throughout the movie.</p>
        <p>
          <a class="button icon ion-home" href="#/tab/home"> Home</a>
          <a class="button icon ion-chevron-left" href="#/tab/facts"> Scientific Facts</a>
        </p>
      </ion-content>
    </ion-view>
  </script>

  
  <script id="nav-stack.html" type="text/ng-template">
    <ion-view title="Tab Nav Stack">
      <ion-content class="padding">
        <p><img src="http://ionicframework.com/img/diagrams/tabs-nav-stack.png" style="width:100%"></p>
      </ion-content>
    </ion-view>
  </script>

  <script id="contact.html" type="text/ng-template">
    <ion-view title="Contact">
      <ion-content>
        <p>@IonicFramework</p>
        <p>@DriftyCo</p>
      </ion-content>
    </ion-view>
  </script>

</body>
</html>
