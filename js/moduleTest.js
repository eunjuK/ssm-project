(function(global, $) {
	'use strict';

	console.log("test");
	$(".logo").click(console.log("logo"));
	$(".logo").click(function(){
		console.log("click logo");
	});
})(this, this.jQuery);