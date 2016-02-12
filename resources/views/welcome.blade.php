<!DOCTYPE html>
<html ng-app="asAdmin">
    <head>
        <title>Allservices</title>

        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.5/angular-material.min.css">

        <!-- Angular Material requires Angular.js Libraries -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
         
        <!-- Angular Material Library -->
        <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.0.0-rc5/angular-material.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="/js/controllers.js"></script>
       
    </head>
    <body ng-controller="TestCtrl">
        
        <!-- Tollbar -->
        <md-toolbar>
            <div class="md-toolbar-tools">
                <md-button class="md-icon-button" ng-click="toggleSidebar()">
                    <i class="material-icons">menu</i>
                </md-button>
                <h2>
                    <span>Toolbar with Icon Buttons</span>
                </h2>
                <span flex></span>
                <md-button class="md-icon-button" aria-label="Favorite">
                    <i class="material-icons">person</i>
                </md-button>
            </div>
        </md-toolbar>
        
        <p>
            <!-- Body -->
            Hello Baby!
        </p>
       
        <md-sidenav class="md-sidenav-left md-whiteframe-z2" md-component-id="left">
            <md-toolbar class="md-theme-light">
                <h1 class="md-toolbar-tools">Sidenav Right</h1>
            </md-toolbar>
            <md-content ng-controller="LeftSidebarCtrl" layout-padding>
                
                <md-menu-item>
                    <md-button ng-click="$mdOpenMenu()">New</md-button>
                </md-menu-item>
                <md-menu-item>
                    <md-button ng-click="$mdOpenMenu()">New</md-button>
                </md-menu-item>
                <md-menu-item>
                    <md-button ng-click="$mdOpenMenu()">New</md-button>
                </md-menu-item>
                <md-menu-item>
                    <md-button ng-click="$mdOpenMenu()">New</md-button>
                </md-menu-item>
                <md-menu-item>
                    <md-button ng-click="$mdOpenMenu()">New</md-button>
                </md-menu-item>
                <md-menu-item>
                    <md-button ng-click="$mdOpenMenu()">New</md-button>
                </md-menu-item>

                <md-button ng-click="close()" class="md-primary">
                    Close Sidenav Right
                </md-button>
            </md-content>
        </md-sidenav>
    </body>
</html>
