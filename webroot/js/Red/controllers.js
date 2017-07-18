angular.module('hacking.controllers',[])
   .controller('MainCtrl',['$scope', function($scope){
   		var self = this;

   }])
   .controller('HomeCtrl',['$scope','$templateCache','JoinServices','$state', function($scope,$templateCache,JoinServices,$state){
   		$templateCache.removeAll();
   		var self = this;

   		self.login = function(user){
   			self.loader = true;
   			JoinServices.login(user).then(function(response){
   						Materialize.toast('Authentification réussie',2000,'mg_sec_background_2');
   						$state.go('app.account');
   			}, function(errResponse){
   						Materialize.toast('Authentification échouée, veuillez réessayer!',2000,'red');
   			}).finally(function(){
   			   self.loader = false;
   			});
   		};


   }])
   .controller('SigninCtrl',['$scope','$templateCache','JoinServices','$state', function($scope,$templateCache,JoinServices,$state){
   		$templateCache.removeAll();
   		var self = this;

   		self.signin = function(user){
   			self.loader = true;
   			
   			JoinServices.join(user).then(function(response){
   						Materialize.toast('Inscription effectué avec succès!',2000,'mg_sec_background_2');
   						$state.go('app.account');
   			}, function(errResponse){
   				switch(errResponse.status){
   					case 400:
   						Materialize.toast('Inscription effectué avec succès!',2000,'mg_sec_background_2');
   						$state.go('app.home');
   					break;
   					case 401:
   						Materialize.toast('Ce compte Utilisateur existe déjà, veuillez renseigner un autre',2000,'red');
   					break;
   				}
   			}).finally(function(){
   			   self.loader = false;
   			});
   		};
   }])
   .controller('AccountCtrl',['$scope','UserServices', function($scope,UserServices){
   	   var self = this;
   	   UserServices.me().then(function(response){
   	   		self.pseudo = response.data.me.username;
   	   }, function(errResponse){
   	   		Materialize.toast('Une erreur est survenue lors de la réupération des informations utilisateurs',2000,'rounded red');
   	   });
   }])