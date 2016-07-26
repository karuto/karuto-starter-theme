var globalFunc = (function($) {
  var x = function(y) {
    console.log(y);
  };

  var init = function() {
  };

  return function() {
    init();
  };
}(jQuery));