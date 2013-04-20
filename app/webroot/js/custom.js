/* ===================================================
 * custom.js
 * 
 * Custom functions required for Practice Room
 * ========================================================== */

//All pages
function doCancel(redirect) {
	location.href = redirect;
}

//newCompetition.php

function initializeDateWidget() {

	var nowTemp = new Date();
	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
	 
	var startdate = $('#datepicker1').datepicker({
		format:  	'dd-mm-yyyy',
		onRender: function(date) {
			return date.valueOf() < now.valueOf() ? 'disabled' : '';
		}
	}).data('datepicker');
}

initializeDateWidget();

//Other functions

//Money Fields
(function($){
  $.fn.money_field = function(options) {
    var defaults = {
      width: null
    };
    var options = $.extend(defaults, options);
    
    return this.each(function() {
      obj = $(this);
      if(options.width)
        obj.css('width', options.width + 'px');
      obj.wrap("<div class='input-prepend'>");
      obj.before("<span class='add-on'>$</span>");
    });
  };
})(jQuery);

if ($("#competitionPrize")) {
	$("#competitionPrize").money_field();
} 