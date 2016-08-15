project.config(function($routeProvider, $locationProvider) {		
				
		$routeProvider
			.when('/', {
				templateUrl: 'home/bna',
				controller: 'bnaController'
			})
				
			.when('/upload/hero', {
				templateUrl: 'home/upload_hero',
				controller: 'form2Controller'
			})

			.when('/upload/gallery', {
					templateUrl: 'home/upload_gallery',
					controller: 'form2Controller'
			})

			.when('/suggestions', {
				templateUrl: 'home/suggestions',
				controller: 'form2Controller'
			})

			.when('/product/extend-reach', {
				templateUrl: 'home/extend_reach',
				controller: 'form2Controller'
			})

			.when('/product/free', {
				templateUrl: 'home/free',
				controller: 'form2Controller'
			})

			.when('/product/get-found', {
				templateUrl: 'home/get_found',
				controller: 'form2Controller'
			})

			.when('/product-free', {
				templateUrl: 'home/product_free',
				controller: 'form2Controller'
			})

			.when('/keywords', {
				templateUrl: 'home/keywords'
			})
				
				.when('/step/1', {
						templateUrl: 'home/step/1',
						controller: 'mainController'
				})
				
				.when('/step/2', {
						templateUrl: 'home/step/2',
						controller: 'mainController'
				})
				
				.when('/step/3', {
						templateUrl: 'home/step/3',
						controller: 'mainController'
				})
				
				.when('/step/4', {
						templateUrl: 'home/step/4',
						controller: 'mainController'
				})
		        
});

project.controller('mainController', function($scope, $location) {		
		slowScroll();
			
		$(document).foundation();
});

project.controller('form2Controller', function($scope) {
	slowScroll();
});

project.controller( 'bnaController', function($scope) {
	$scope.isActive = false;
  	$scope.activeButton = function() {
    	$scope.isActive = !$scope.isActive;
  	}
	
  	console.log('test');
});

// snippet from http://plnkr.co/edit/y5n16v?p=preview
var UploadController = function ($scope, fileReader) {
    $scope.getFile = function () {
        $scope.progress = 0;
        fileReader.readAsDataUrl($scope.file, $scope)
                      .then(function(result) {
                          $scope.imageSrc = result;
                      });
    };
 
    $scope.$on("fileProgress", function(e, progress) {
        $scope.progress = progress.loaded / progress.total;
    });

	$scope.initUpload = function() {
		$('#init-upload').click();
	};
};

project.directive("ngFileSelect",function(){
  return {
    link: function($scope,el){
      
      el.bind("change", function(e){
      
        $scope.file = (e.srcElement || e.target).files[0];
        $scope.getFile();
      })
      
    }
    
  }
});

function slowScroll() {
	$('html, body').animate({
	   scrollTop: $('h3').offset().top
	}, 'slow');
}