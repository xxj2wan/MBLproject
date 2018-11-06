<?php
include("lib/server_link.php");
ini_set("display_errors","1");
error_reporting(E_ALL);
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="marinestyle.css">
<title></title>
<script language="javascript">
function OnChange(){
		var cYear = document.getElementById("PY").options[document.getElementById("PY").selectedIndex].value;
		var selectbutton = "";
				if( cYear == "1"){
				selectbutton += "<select><option value=fall>Fall</option><option value=winter>Winter</option></select>";
				document.getElementById("PS").innerHTML = selectbutton;
				}else if( cYear == "x"){
						selectbutton +="";
								document.getElementById("PS").innerHTML = selectbutton;
				}
				else{
						selectbutton += "<select><option value=spring>Spring</option><option value=summer>Summer</option><option value=fall>Fall</option><option value=winter>Winter</option></select>";
						document.getElementById("PS").innerHTML = selectbutton;
				}
}
</script>
</head>
<body>
<div id = hr1>
<hr>
</div>
	<div id = "wqtable">
		<table id="summary" width=580 cellpadding=2 cellspacing=1 bgcolor=#777777>
		<tr bgcolor=#999999>
		<td id="tableheader">
			<font color=white>Water Quality</font>
			<div id=wq_setting>
			<form name="Proj_Year" method=POST action="">
			<select name="project_year" id="PY" onchange="OnChange();">
				<option value="x">Year</option>
				<option value="1">2018</option>
				<option value="2">2019</option>
				<option value="3">2020</option>
				<option value="4">2021</option>
			</select>
			<div id="PS"></div>
			<div id="Go">
			<input type=submit name=submit value=Go></input></div>
			</form>
			</div>
			</td>
		</tr>
		<tr bgcolor=white>
			<td>
				<table id = THeadername align=left>
				<thead>
				<tr>
					<th>SITE</th>
					<th>Fall</th>
					<th>Winter</th>
					<th>Spring</th>
					<th>Summer</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$command="SELECT DISTINCT Groups from WATER_Q";
				$result=$conn->query($command);
				while($row=$result->fetch_array()){
						$wtGroup2=$row['Groups'];
						echo "<tr align=center width=100>
						 <td>$wtGroup2</td>
						 </tr>";
				}?>
				</tbody>
				</table>
			</td>
		</tr>
		</table>
	</div>

</body>
</html>
