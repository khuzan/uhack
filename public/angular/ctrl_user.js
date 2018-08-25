    var myApp = angular.module('myApp',[]);
      myApp.controller('SampleController', function($scope){
            $scope.accounts = [ 
                    {id: 1, name: 'Johnny Sins'}, 
                    {id: 2, name: 'Lana Rhoades'},
                    {id: 2, name: 'Mia Malkova'},
                    {id: 2, name: 'Nicole Aniston'}
                  ];
            $scope.products = [
                    {id:'1',name:'Mango', txnType:'EXPENDITURE'},
                    {id: '2', name:'Apple', txnType:'EXPENDITURE'},
                    {id: '2', name:'Orange', txnType:'EXPENDITURE'},
                    {id: '2', name:'Grapes', txnType:'EXPENDITURE'}
                  ];
            $scope.transactions = [
                {id:'1', txnType:'EXPENDITURE', quantity: 1000, account: $scope.accounts[0], product: $scope.products[0]},
                {id:'2', txnType:'EXPENDITURE', quantity: 500, account: $scope.accounts[1], product: $scope.products[1]},
                {id:'3', txnType:'EXPENDITURE', quantity: 50, account: $scope.accounts[2], product: $scope.products[2]},
                {id:'4', txnType:'EXPENDITURE', quantity: 100, account: $scope.accounts[3], product: $scope.products[3]},
               
            ];
      });