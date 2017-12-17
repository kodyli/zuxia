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
			$("#inputsJsGrid").jsGrid(jsGrid.toGridConfig("/inputs",[
				{ name: "id",title:"Id", type: "number", sorter: "number",width: 50,align: "center", editing:false },
				{ name: "type",title:"Type", type: "text", width: 200, align: "left",validate: "required",autosearch: true }
				]));
		});	
	</script>
</body>
</html>