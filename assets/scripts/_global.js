var globalFunc = (function($) {
  var x = function(y) {
    console.log(y);
  };
  var a = 'yoo';

  var contentStackController = function(cardName) {
  };

  var init = function() {
    x(a);
    contentStackController('.featuredstage');
  };

  return function() {
    init();
  };
}(jQuery));