<?php
ini_set("display_error","1");
?>
<html>
<head>
	<meta charset="utf-8">
</head>
	<link rel="stylesheet" type="text/css" href="marinestyle.css">
<body>
<hr>
<!--<section id = BoxSection>
	<div id = resultBox>
	<span>Water Quality</span>
	</div>
	<div id = resultBox>
	<span>MiSeq</span>
	</div>
	<div id = resultBox>
	<span>HiSeq</span>
	</div>
	<div id = resultBox>
	<span>Isolation</span>
	</div>
</section>-->
<!--<table id = BoxTable>
	<tr>
		<th>Water Quality</th>
		<th>MiSeq</th>
		<th>HiSeq</th>
		<th>Isolation</th>
	</tr>
</table>-->
<div class = BoxSection>
<ul id = BoxUl>
	<li><button class="resultBox" onclick='alert("click");'>Water Quality</li>
	<li><button class="resultBox" onclick="();">MiSeq</li>
	<li><button class="resultBox" onclick="();">HiSeq</li>
	<li><button class="resultBox" onclick="();">Isolation</li>
</ul>
</div>
</body>
</html>
