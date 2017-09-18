var singleFunc = (function($) {
  var x = function(y) {
    console.log(y);
  };
  var a = '_single';

  var loadFeaturedImage = function() {
    var imagesrc = $('.entryintro').first().attr('data-imagesrc');
    x(imagesrc);
    if (imagesrc) {
      x('got it');
      var src = 'url(' + imagesrc + ')';
      $('.wrap--header').first().css('background-image', src);
    }
  };

  var init = function() {
    x(a);
    // loadFeaturedImage();
  };

  return function() {
    init();
  };
}(jQuery));
