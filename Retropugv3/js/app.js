var app = angular.module("app", ['ngRoute'], function ($routeProvider) 
{
    $routeProvider
	.when("/", {
        templateUrl: "/views/home.html"
    })
	.when("/guest/register", {
		templateUrl: "/views/guest/register.php"
	})
    .when("/guest/login", {
        templateUrl: "/views/guest/login.html"
    })    
    .when("/guest/joinroom", {
        templateUrl: "/views/guest/joinroom.html"
    })
    .when("/registered/hostroom", {
        templateUrl: "/views/registered/hostroom.html"
    })
	.when("/guest/lobby", {
		templateUrl: "/views/guest/lobby.html"
    })
    .when("/guest/guesthome", {
        templateUrl: "/guesthome.html"
    })
	.when("/guest/join", {
		templateUrl: "/views/guest/join.html"
	})
	.when("/registered/profile", {
		templateUrl: "/views/registered/profile.html"
	})
	.when("/admin/admin", {
		templateUrl: "/views/admin/admin.html"
	})
	.when("/admin/profile", {
		templateUrl: "/views/admin/profile.html"
    })
    .when("/registered/lobby", {
        templateUrl: "/views/registered/lobby.html"
    })
    
	.when("/admin/banprofile", {
		templateUrl: "/views/admin/banprofile.html"
	});
});

app.controller("Home-Controller", function ($scope, $http) {

    $scope.poop = "Hello world";
    $scope.clickMe = function () {
        alert("You clicked me!");
    };
});