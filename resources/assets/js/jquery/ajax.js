(function($){
	if(!$.isFunction($.put)){
		$.put=function(settings){
			settings.method="PUT";
			return $.ajax(settings);
		}
	}
	if(!$.isFunction($.delete)){
		$.delete=function(settings){
			settings.method="DELETE";
			return $.ajax(settings);
		}
	}
})(window.jQuery);