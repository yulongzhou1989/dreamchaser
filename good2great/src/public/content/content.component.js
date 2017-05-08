(function () {
"use strict";

angular.module('public')
.component('content', {
  templateUrl: 'src/public/content/content.html',
  bindings: {
    content: '<'
  },
  controller: contentController
});


contentController.$inject = ['ApiPath'];
function MenuItemController(ApiPath) {
  var $ctrl = this;
  $ctrl.basePath = ApiPath;
}

})();
