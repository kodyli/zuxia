<!DOCTYPE html>
<html>
<head>
	<title>Form Input Elements</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="/js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body class="container">
	<div id="inputsJsGrid"></div>
	<script>
		$(function(){
			$("#inputsJsGrid").jsGrid({
				width: "100%",
				height: "520",
				paging: true,
				pageSize: 10,
				autoload: true,
				filtering: true,
				inserting: true,
				editing: true,
				sorting: true,
				autoload: true,
				controller: {
					loadData: function(filter){
						var d = $.Deferred();
						$.get({
							url: "/inputs",
							dataType: "json"
						}).done(function(response) {
							if(filter.type){
								response = $.grep(response, function(item) {
									return item.type.indexOf(filter.type)>=0;
								});
							}
							d.resolve(response);
						});
						return d.promise();
					},
					insertItem: function(item){
						$.post({
							url:"inputs",
							data:item,
							dataType: "json"
						}).done(function(response){
							item.id=response.id;
						});
					},
					updateItem: function(item){
						$.put({
							url:"inputs/"+item.id,
							data:item
						}).done(function(response){
							item.type=response.type;
						});
					},
					deleteItem: function(item){
						$.delete({
							url:"inputs/"+item.id,
							data:item
						});
					}
				},
				fields: [
				{ name: "id",title:"Id", type: "number", sorter: "number",width: 50,align: "center", editing:false },
				{ name: "type",title:"Type", type: "text", width: 200, align: "left",validate: "required",autosearch: true },
				{ type: "control" }
				]
			});
		});	
	</script>
</body>
</html>