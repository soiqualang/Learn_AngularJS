var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
	//var url='https://www.w3schools.com/angular/customers.php';
	var url='customers.php';
    $http.get(url).then(function (response) {
		$scope.names = response.data.records;
	});
});