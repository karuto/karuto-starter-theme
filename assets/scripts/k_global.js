var globalFunc = (function($) {
  var x = function(y) {
    console.log(y);
  };
  var a = 'yoo';

  return function() {
    x(a);
    console.log($('.open-content'));
  };
}(jQuery));