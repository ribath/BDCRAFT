var app = angular.module('handicrafts', [], function($interpolateProvider){

    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
})
    .constant('API_URL', 'http://localhost:8080/bdcraft/public/api/v1/');


