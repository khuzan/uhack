var app = angular.module('project', []);
app.filter('trusted', ['$sce', function ($sce) {
   return $sce.trustAsResourceUrl;
}]);
jsonConfig = {
        headers: {
        	'Content-Type': 'application/x-www-form-urlencoded',
        	'X-CSRF-Token': document.getElementsByName('csrf-token').content
        }
      };