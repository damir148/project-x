project.config(function($routeProvider, $locationProvider) {		
				
		$routeProvider
			.when('/', {
				templateUrl: 'homepage/index',
				controller: 'redirectHomepage'
			})

			.when('/bna', {
				templateUrl: 'home/bna',
				controller: 'bnaController'
			})

			.when('/postcode', {
				templateUrl: 'home/postcode',
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

			.when('/suggestions/v2', {
				templateUrl: 'home/suggestions/v2',
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
				
				.when('/step/5', {
						templateUrl: 'home/step/5',
						controller: 'mainController'
				})
				
				.when('/step/6', {
						templateUrl: 'home/step/6',
						controller: 'mainController'
				})
				
				.when('/step/7', {
						templateUrl: 'home/step/7',
						controller: 'mainController'
				})
				
				.when('/step/8', {
						templateUrl: 'home/step/8',
						controller: 'mainController'
				})
				
				.when('/dashboard', {
						templateUrl: 'home/dashboard',
						controller: 'mainController'
				})

				.when('/dashboard02', {
						templateUrl: 'home/dashboard02',
						controller: 'mainController'
				})
});

project.controller('redirectHomepage', function(){
	window.location.href = BASE_URL + 'homepage/index';
})

project.controller('mainController', function($scope, $location) {		
		// slowScroll();
			
		$(document).foundation();
});

project.controller('form2Controller', function($scope) {
	// slowScroll();
});

project.controller( 'bnaController', function($scope) {
	$(document).foundation();

	$scope.isActive = false;
  	$scope.activeButton = function() {
    	$scope.isActive = !$scope.isActive;
  	}

  	$scope.showRecommendation = false;

  	$scope.enableRecommendation = function() {
    	$scope.showRecommendation = true;
  	}
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