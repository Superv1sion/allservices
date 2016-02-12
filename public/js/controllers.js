'use strict';

var asAdmin = angular.module('asAdmin', ['ngMaterial'])

asAdmin.controller('TestCtrl', function($scope, $mdDialog, $timeout, $mdSidenav){
    $scope.toggleSidebar = buildToggler('left');
 
    function buildToggler(navID) {
      	return function() {
        	$mdSidenav(navID).toggle();
     	}
    }

	$scope.phones = [
	    {"name": "Nexus S",
	     "snippet": "Fast just got faster with Nexus S."},
	    {"name": "Motorola XOOM™ with Wi-Fi",
	     "snippet": "The Next, Next Generation tablet."},
	    {"name": "MOTOROLA XOOM™",
	     "snippet": "The Next, Next Generation tablet."}
  	];

  	$scope.hello = 'Hello Angular Material';
 
  	$scope.releaseKraken = function() {
		$mdDialog.show(
		    $mdDialog.alert({
			    title:'ОЛОЛОЛО',
			    textContent: 'Гриша нуб',
			    ok: 'Run!'
		    })
	  	);
	}
});

asAdmin.controller('LeftSidebarCtrl', function ($scope, $timeout, $mdSidenav, $log) {
    $scope.close = function () {
      	$mdSidenav('left').close();
    };
});