angular.module('myAngularApp')
	
	.config (function ($stateProvider) {

		$stateProvider.state({
			'name':'login',
			'url':'/',
			'templateUrl': '/angular/pages/welcome.html'
		})


	})
