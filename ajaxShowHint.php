<!DOCTYPE html>
<html>
<head>
	<title>ajaxShowHint</title>
</head>
<body>

	<form action="">
		fisrt name =  <input type="text" id="txt1" onkeyup="openHint(this.value)"></input>
	</form>
	<p>Sugesti: <span id="txtHint"></span></p>
<!-- <script>
		function openHint(str)
		{
			var xhttp;
			if (str.length == 0) {
				document.getElementById("txtHint").innerHTML = "";
				return;				
			}
				xhttp = new XMlHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					}
				};
				xhttp.open("GET", "hints.php?q="+str, true);
				xhttp.send();
			
		}
	</script>
 -->
	<script>
function openHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "hints.php?q="+str, true);
  xhttp.send();   
}
</script>
</body>

</html>
