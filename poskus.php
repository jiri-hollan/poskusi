<!DOCTYPE html>
<html lang="cs-SI"> 
<head>
<script src="javaScript.js"></script>
<script>
 function headFunction() {
document.getElementById("p2").innerHTML = "<b>2. funkcija v skriptu v head</b>";
 }
 //document.getElementById("p2a").innerHTML = "<b>2a. skript v head</b>"; //verjetno se ne prikaže
//alert('skript v glavi');
</script>
</head>
 <body>


<p id="p1">to je p1---1. skript v body</p>
<p id="p2">to je p2---2.funkcija v skriptu v head </p>
<p id="p2a">to je p2a---2a.skript v head</p>
<p id="p3">to je p3---3.funkcija v linku v head </p>
<p id="p3a">to je p3a---3a.skript v linku v head</p>
<p id="p4">to je p4---4.skript v PHP</p>
<p id="p4a">to je p4a---4a.funkcija v PHP</p>
<p id="p5">to je p5---5.link v body funkcija</p>
<p id="p5a">to je p5a---5a.link v body skript</p>
<button type="button" onclick="headFunction()">Skript v head</button>
<button type="button" onclick="fajlFunction()">link v head</button>
<button type="button" onclick="fajlFunctionBody()">link v body</button>
<button type="button" onclick="fajlFunctionPhp()">funkcija v php</button>
<script>
document.getElementById("p1").innerHTML = "<b>1. skript v body</b>";
//document.getElementById("p4").innerHTML = "<b>4. skript v PHP</b>";
</script>
<script src="javaScriptBody.js"></script>
<?php
require_once('javaScript.php');
?>
 </body>  
</html>