<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<div id="demo">
		<h2>The XMLHttp Request Object</h2>
		<button type="button" onclick="load()">Change Content</button>
	</div>

	
</body>

<script>
		function load()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("demo").innerHTML = this.responseText;
				}
			};
	
			xhttp.open("GET", "ajaxText.txt", true);
			xhttp.send();
		}
	</script>
</html>