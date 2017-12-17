(function(jsGrid){
	jsGrid.toGridConfig=function(url,fields,config){
		fields.push({ type: "control" });		
		var _config = {
			width: "100%",
			height: "520",
			paging: true,
			pageSize: 10,
			autoload: true,
			inserting: true,
			editing: true,
			sorting: true,
			autoload: true,
			controller: {
				loadData: function(filter){
					var d = $.Deferred();
					$.get({
						url: url,
						dataType: "json"
					}).done(function(response) {
						d.resolve(response);
					});
					return d.promise();
				},
				insertItem: function(item){
					$.post({
						url:url,
						data:item,
						dataType: "json"
					}).done(function(response){
						var keys = item.keys;
						$.each(keys,function(index, value){
							item[value]=response[value];
						});
					});
				},
				updateItem: function(item){
					console.log(item);
					$.put({
						url:url+"/"+item.id,
						data:item
					}).done(function(response){
						var keys = item.keys;
						$.each(keys,function(index, value){
							item[value]=response[value];
						});
							//item.type=response.type;
						});
				},
				deleteItem: function(item){
					$.delete({
						url:url+"/"+item.id,
						data:item
					});
				}
			},
			fields: fields
		};
		if($.isPlainObject(config)){
			delete config.controller;
			delete config.fields;
			$.extend(true,_config,config);
		}
		return _config;
	}
})(window.jsGrid);