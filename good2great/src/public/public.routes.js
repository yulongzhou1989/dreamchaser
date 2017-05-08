(function() {
'use strict';

angular.module('public')
.config(routeConfig);

/**
 * Configures the routes and views
 */
routeConfig.$inject = ['$stateProvider'];
function routeConfig ($stateProvider) {
  // Routes
  $stateProvider
    .state('public', {
      absract: true,
      templateUrl: 'src/public/public.html'
    })
    .state('public.content', {
      url: '/content',
      templateUrl: 'src/public/content/content-edit.html',
      controller: 'ContentEditController',
      controllerAs: 'contentCtrl',
      resolve: {
        content: ['ContentService', function (ContentService) {
          return ContentService.getContent();
        }]
      }
    })
    .state('public.login', {
      url: '/login',
      templateUrl: 'src/public/login/login.html',
      controller: 'LoginController',
      controllerAs: 'loginCtrl',
      // These are params that this state expects to be populated
      // Allows us to pass via $state.go(path, params)
      params: {
        toParams: null,
        toState: null
      }
    })
}
})();
