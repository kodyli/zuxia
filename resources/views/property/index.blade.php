<!DOCTYPE html>
<html>
<head>
	<title>Category Properties</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script type="text/javascript" src="/js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body class="container">
	<div id="propertiesJsGrid"></div>
	<script>
		$(function(){
			$.when($.get('inputs/dropDown'),$.get('categories/dropDown')).then(function(response1,response2){
				var fields =[
				{ name: "categoryId",title:"Category", type: "select",items:response2[0],valueField: "id",textField: "name",valueType: "number",width: 50, align: "left",validate: "required" },
				{ name: "inputId",title:"Input Type", type: "select",items:response1[0],valueField: "id",textField: "type",valueType: "number",width: 50, align: "left",validate: "required" },
				{ name: "label",title:"Input Label", type: "text", width: 50, align: "left",validate:["required","capitalize"]},
				{ name: "name",title:"Input Name", type: "text", width: 50, align: "left",validate: "required"},
				{ name: "isMandatory",title:"Is Mandatory", type: "checkbox", width: 50, align: "center",validate: "required"},
				{ name: "id",title:"Id", type: "number", sorter: "number",width: 20,align: "center", editing:false,visible: false }
				];
				$("#propertiesJsGrid").jsGrid(jsGrid.toGridConfig("/properties",fields));
			});
		});	
	</script>
</body>
</html>