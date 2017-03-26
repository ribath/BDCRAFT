app.controller('MainControllers', function($scope, $http, API_URL) {

    $scope.title='hello';
    $scope.id=null;
    $scope.products = [
        {
            id: 01,
            name: 'item1',
            price:80,
            wish:'Add to wishlist',
            compare:'Add to compare',
            cover:'image/img_01.jpg'
        },
        {
            id: 02,
            name: 'item2',
            price:20,
            wish:'Add to wishlist',
            compare:'Add to compare',
            cover:'image/img_02.jpg'
        },
        {
            id: 03,
            name: 'item3',
            price:10,
            wish:'Add to wishlist',
            compare:'Add to compare',
            cover:'image/img_03.jpg'
        },
        {
            id: 04,
            name: 'item4',
            price:50,
            wish:'Add to wishlist',
            compare:'Add to compare',
            cover:'image/img_04.jpg'
        },
        {
            id: 05,
            name: 'item5',
            price:40,
            wish:'Add to wishlist',
            compare:'Add to compare',
            cover:'image/img_04.jpg'
        },
        {
            id: 06,
            name: 'item6',
            price:60,
            wish:'Add to wishlist',
            compare:'Add to compare',
            cover:'image/img_04.jpg'
        }
    ];



    $scope.add=function(id)
    {
        var url = API_URL + "addtocart/"+id;
        $scope.id=id;

        alert(id);
        $http({
            method: 'GET',
            url: url,
            headers: {'Content-Type': 'text/html'}
        }).success(function(response) {
            alert(response);
            //location.reload();
        }).error(function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });

    };
    $scope.delete=function(id)
    {
        var url = API_URL + "deletetocart/"+id;
        $scope.id=id;

        alert(id);
        $http({
            method: 'GET',
            url: url,
            headers: {'Content-Type': 'text/html'}
        }).success(function(response) {
            alert(response);
            //location.reload();
        }).error(function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });

    };

});
