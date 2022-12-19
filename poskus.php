<!DOCTYPE html>
<html lang="cs-SI"> 
<head>
<script src="javaScript.js"></script>
<script>
 function headFunction() {
document.getElementById("p2").innerHTML = "<b>2. skript v head funkcija</b>";
 }
 //document.getElementById("p2a").innerHTML = "<b>2a. skript v head</b>"; //verjetno se ne prikaže
//alert('skript v glavi');
</script>
</head>
 <body>
 <?php
require_once('javaScript.php');
?>
<p id="p1">to je p1---1. skript v body</p>
<p id="p2">to je p2---2.skript v head funkcija</p>
<p id="p2a">to je p2a---2a.skript v head</p>
<p id="p3">to je p3---3.link v head funkcija</p>
<p id="p4">to je p4---4.skript v PHP</p>
<p id="p5">to je p5---5.link v head skript</p>
<p id="p6">to je p6---6.link v body funkcija</p>
<p id="p7">to je p7---7.link v body skript</p>
<button type="button" onclick="headFunction()">Skript v head</button>
<button type="button" onclick="fajlFunction()">link v head</button>
<button type="button" onclick="fajlFunctionBody()">link v body</button>
<script>
document.getElementById("p1").innerHTML = "<b>1. skript v body</b>";
</script>
<script src="javaScriptBody.js"></script>
<script>
<?php
require_once('javaScript.php');
?>
 </body>  
</html>