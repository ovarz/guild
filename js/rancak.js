/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};
/* end scroll script */

var back_to_top = function(){
  "use strict";
  $('#btt').click(function(){
	$('body,html').animate({scrollTop:0},0);
    return false;
  });	
};

var popup_box = function(){
  "use strict";
  $('.popup-link').click(function(){
    var get_id = $(this).attr('title');
	$(this).toggleClass('popup-open');
	$('.popup-link').not(this).removeClass('popup-open');
    $('#popup-' + get_id).slideToggle('fast').toggleClass('popup-box-show');
    $('.popup-box').not('#popup-' + get_id).slideUp('fast').removeClass('popup-box-show');
    return false;
  });	
};

var action_button = function(){
  "use strict";
  $('.user-action-button').click(function(){
	$(this).toggleClass('user-action-pressed');
    return false;
  });	
};

var voting_result = function(){
  "use strict";
  $('.polling-choice-button').click(function(){
	$('.polling-choice, .polling-choice-button').hide();
	$('.polling-result, .polling-note').fadeIn('slow');
    return false;
  });	
};

var sticky_maincolumn_right = function(){
  "use strict";
  var $window = $(window);
  function checkWidth(){
    var windowsize = $window.width();
    if (windowsize > 1000){
      $window.scroll(function(){
		var sc = $window.scrollTop();
        var right_container_height = $('.column-small-container').outerHeight();
		if(sc >= 0){
          $('.column-small-container').css({
			'top':'calc(100% - ' + right_container_height + 'px - 24px)' //--section-space-medium
          });
		}
      });
    }
  }
  checkWidth();
  //$(window).resize(checkWidth);
};



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  popup_box();
  action_button();
  voting_result();
  sticky_maincolumn_right();
});



$(document).on('lazybeforeunveil lazyloaded', function(e) {
  if(e.type === 'lazyloaded'){
    //$(e.target).parent().removeClass('thumb-loading');
  }
});