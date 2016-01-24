var ajaxFunc = (function($) {
  var x = function(y) {
    console.log(y);
  };
  var a = 'ajax';

  var singlePostController = function() {
    $('.entry-title').click(function(e) {
      e.preventDefault();
      var postid = $(this).attr('data-postid');
      x(postid);
    });    
  };

  var init = function() {
    x(a);
    singlePostController();
  };

  return function() {
    init();
  };
}(jQuery));