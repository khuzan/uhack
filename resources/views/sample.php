<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body ng-app='app1'>
    <div id='Grocery' ng-controller='Grocery'>
      <h3>Grocery List</h3>
        <div ng-repeat='x in lst'>
          <h4>{{x.item}}</h4>
        </div>
      <br>
     
   <p> enter item:
   <input type="text" ng-model='addItem'/>
   </p>
   <button ng-click='addTolist(addItem)'>Add to list</button>
    <h2>{{NoItemError}}</h2>
    </div> <!-- End of Grocery -->
 
<script src="angular/angular.min.js"></script>

 <script>

var app1 = angular.module('app1', []);
app1.controller('Grocery', function($scope) {
$scope.lst = [
]
$scope.addTolist = function(addItem){
 if (!(addItem === undefined || addItem === '')){
     $scope.lst.push({item: addItem, needed: false});
     $scope.NoItemError = '';
     } else {
        $scope.NoItemError = 'Please enter an item';
            }
}
});
</script>
</body>
</html>