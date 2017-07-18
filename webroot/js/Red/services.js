angular.module('hacking.services',[])
       .factory('JoinServices',['$http','$q', function($http,$q){
       	  return{
       	  	join:function($user){
       	  		return $http.post('/home/signin',$user).then(function(response){
       	  			return response;
       	  		}, function(errResponse){
       	  			return $q.reject(errResponse);
       	  		});
       	  	},
       	  	login:function($user){
       	  		return $http.post('/home/login',$user).then(function(response){
       	  			return response;
       	  		}, function(errResponse){
       	  			return $q.reject(errResponse);
       	  		});
       	  	}
       	  };
       }])
       .factory('UserServices',['$http','$q', function($http,$q){
       	  return{
       	  	me:function(){
       	  		return $http.get('/home/self').then(function(response){
       	  			return response;
       	  		}, function(errResponse){
       	  			return $q.reject(errResponse);
       	  		});
       	  	},
       	  	verify: function(){
       	  		return $http.get('/home/session').then(function(response){
       	  			return response;
       	  		}, function(errResponse){
       	  			return $q.reject(errResponse);
       	  		});
       	  	}
       	  };
       }])