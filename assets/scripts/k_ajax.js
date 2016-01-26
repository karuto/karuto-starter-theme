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
      $.ajax({
        url: ajaxcontent.ajaxurl,
        type: 'post',
        data: {
          action: 'ajax_fetch_content',
          post_id: postid,
          post_type: 'post'
        },
        success: function(data, textStatus, XMLHttpRequest) {
          console.log("ajax returned:", data);
        }
      });

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