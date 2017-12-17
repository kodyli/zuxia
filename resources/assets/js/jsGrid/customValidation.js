//jsGrid custom validation
(function(jsGrid){
	function isCapitalized(value){
		return /^\b(?:[A-Z]\w+\b(?:\s*)?)+$/.test(value);
	}


	jsGrid.validators.capitalize = {
		message: "Please capitalize the first letter of each word.",
		validator: function(value, item) {
			return isCapitalized(value);
		}
	}
})(window.jsGrid);