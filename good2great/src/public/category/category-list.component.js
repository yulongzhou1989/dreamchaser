(function () {
"use strict";

angular.module('admin')
.component('categoryList', {
  templateUrl: 'src/public/category/category-list.html',
  controller: CategoryListController
});


CategoryListController.$inject = ['contentService'];
function CategoryListController(contentService) {
  var $ctrl = this;

  $ctrl.$onInit = function () {
    MenuService.getCategories().then(function (categories) {
      $ctrl.categories = categories;
    });
  };
}


})();
