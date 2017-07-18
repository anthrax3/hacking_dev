angular.module('hacking-team',['ui.router','hacking.services','hacking.controllers','ui.materialize'])
		.run(['$rootScope', function($rootScope){
		    // Verifications Here
		    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
                $rootScope.preloader = true;
            });
            $rootScope.$on('$viewContentLoaded', function(event, toState, toParams, fromState, fromParams) {
                $rootScope.preloader = false;
            });

		}])
		.config(['$httpProvider','$urlRouterProvider','$stateProvider','$locationProvider', function($httpProvider,$urlRouterProvider,$stateProvider,$locationProvider){
				// Enabling Html5Mode
				$locationProvider.html5Mode(true);
			    $locationProvider.hashPrefix('!');

			    //routing file
			    $stateProvider.state('app',{
			    	url:'/',
			    	cache:false,
			    	abstract:true,
			    	template:'<ui-view/>',
			    })
			    .state('app.home',{
			    	url:'home',
			    	cache:false,
			    	templateUrl:'/home/login',
			    	controller:'HomeCtrl as homectrl',
			    	resolve: {
				         check: ['UserServices', '$state', function(UserServices, $state){
				              return UserServices.verify().then(function(response){
				                  $state.go('app.account');
				                  return response;
				              },function(errResponse){
				                  return errResponse;
				              });
				         }]
				     }
			    })
			    .state('app.account',{
			    	url:'account',
			    	cache:false,
			    	templateUrl:'/home/account',
			    	controller:'AccountCtrl as accountctrl',
			    	resolve: {
				         check: ['UserServices', '$state', function(UserServices, $state){
				              return UserServices.verify().then(function(response){
				                 return response;
				              },function(errResponse){
				                  $state.go('app.home');
				                  return errResponse;
				              });
				         }]
				     }
			    })
			    .state('app.signin',{
			    	url:'signin',
			    	cache:false,
			    	templateUrl:'/home/signin',
			    	controller:'SigninCtrl as signinctrl'
			    });


			    $urlRouterProvider.otherwise('home');


				//Custom Setting $httpProvider
				$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
		}])