//jsGrid custom date column
(function(jsGrid){
	function CheckboxField (config){
		jsGrid.CheckboxField.call(this,config);
	}
	CheckboxField.prototype=Object.create(jsGrid.CheckboxField.prototype);
	CheckboxField.prototype.insertValue=function(){
		return this.insertControl.is(":checked")?1:0;
	};
	CheckboxField.prototype.editValue=function(){
		return this.insertControl.is(":checked")?1:0;
	};
	jsGrid.fields.checkbox = CheckboxField;
})(window.jsGrid);