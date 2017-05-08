(function () {
"use strict";

angular.module('common')
.service('contentService', contentService);


contentService.$inject = ['$http', 'ApiPath'];
function contentService($http, ApiPath) {
  var service = this;

  service.getCategories = function () {
    return $http.get(ApiPath + '/categories.json').then(function (response) {
      return response.data;
    });
  };


  service.getContent = function (contentId) {
    var config = {};
    if (contentId) {
      config.params = {'contentId': contentId};
    }

    return $http.get(ApiPath + '/content.json', config).then(function (response) {
      return response.data;
    });
  };


  service.getMenuItems = function (contentTitle) {
    var config = {};
    if (contentTitle) {
      config.params = {title: contentTitle};
    }

    return $http.get(ApiPath + '/content.json', config).then(function (response) {
      return response.data;
    });
  }
  
  service.getCategory = function (shortName) {
    return $http.get(ApiPath + '/categories/' + shortName + '.json').then(function (response) {
      return response.data;
    });
  };



  service.saveContent = function (content) {
    return $http.put(ApiPath + '/content/' + menuItem.short_name, menuItem)
    .then(function (response) {
      return response.data;
    });
  };

}


})();
