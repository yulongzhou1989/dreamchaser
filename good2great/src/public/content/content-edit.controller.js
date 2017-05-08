(function() {
"use strict";

angular.module('admin')
.controller('ContentEditController', MenuItemEditController);

ContentEditController.$inject = ['$stateParams', '$state', 'content', '$log'];
function ContentEditController($stateParams, $state,  content, $log) {
  var $ctrl = this;
  $ctrl.content = content;

  $ctrl.onSave = function (content) {
    // $state.go('admin.auth.category',
              // {contentId: content.id},
              // {reload: true}); // tells resolves to refresh
  };

  $ctrl.onCancel = function () {
    // $state.go('admin.auth.category',
              // {categoryId: menuItem.category_short_name});
  };

  $ctrl.onError = function (response) {
    $log.error(response); // for debugging
  };
}

})();
