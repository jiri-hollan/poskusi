<!DOCTYPE html>
<html lang="cs-SI"> 
<head>
<script src="javaScript.js"></script>
<script>
 function headFunction() {
document.getElementById("p2").innerHTML = "2. skript v head";
 }

</script>
</head>
 <body>
<p id="p1"></p>
<p id="p2">to je p2</p>
<p id="p3">to je p3</p>
<p id="p4">to je p4</p>
<p id="p5">to je p5</p>
<button type="button" onclick="headFunction()">Skript v head</button>
<button type="button" onclick="failFunction()">link v head</button>

<script>
document.getElementById("p1").innerHTML = "1. skript v body";
</script>
<script src="javaScript.js"></script>
<script>
<?php
require'javaScript.php';
?>
 </body>  
</html>