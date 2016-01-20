var globalFunc = (function($) {
  var x = function(y) {
    console.log(y);
  };
  var a = 'yoo';

  var contentStackController = function(cardName) {
    var button = '__button';
    var cardOpen = cardName + button + '--open';
    var cardClose = cardName + button + '--close';
    var cardActive = cardName + '--active';
    var cardMask = cardName + '__mask';
    var cardMaskActive = cardMask + '--active';

    var activeState = 'translateX(0px)';
    var hiddenState = 'translateX(100%)';
    var fasterAnimation = '0.2s ease-in-out';
    var slowerAnimation = '0.5s ease-in-out';

    $(cardOpen).click(function () {
      $(cardMask).css('transition', fasterAnimation);
      $(cardMask).css('transform', activeState);
      $(cardName).css('transition', slowerAnimation);
      $(cardName).css('transform', activeState);
    });

    $(cardClose).click(function () {
      $(cardName).css('transition', fasterAnimation);
      $(cardName).css('transform', hiddenState);
      $(cardMask).css('transition', slowerAnimation);
      $(cardMask).css('transform', hiddenState);
    });
  };

  var init = function() {
    x(a);
    contentStackController('.featuredstage');
    // console.log(_.VERSION);
  };

  return function() {
    init();
  };
}(jQuery));