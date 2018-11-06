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
		//document.getElementById("asdf").innerHTML = cYear;
		var test123 = "";
		if ( cYear == "2nd") {
				test123 += "<select><option value=spring>Spring</option></select>";
				document.getElementById("asdf").innerHTML = test123;
		} else if ( cYear == "1st") {
				test123 += "<select><option value=summer>Summer</option></select>";
				document.getElementById("asdf").innerHTML = test123;
		}
		//		if( cYear = "1"){
//			var test = "<select><option value=fall>Fall</option><option value=winter>Winter</option></select>";
//			document.getElementById("asdf").innerHTML= test;
//			alert(cYear);
//		} else {
//				alert(cYear);
//		}
		// else if( cYear = "2" ){
//			var test = "<select><option value=spring>Spring</option><option value=summer>Summer</option><option value=fall>Fall</option><option value=winter>Winter</option></select>";
//			document.getElementById("asdf").innerHTML= test;
//			alert(cYear);
//		}
}
</script>
</head>
<body>
	<div id = "wqtable">
		<table id="summary" width=580 cellpadding=2 cellspacing=1 bgcolor=#777777>
		<tr bgcolor=#999999>
		<td id="tableheader">
			<font color=white>Water Quality</font>
			<div id=wq_setting>
			<!--<form name="Proj_Year" method=POST action="">-->
			<form name=f1 onsubmit="return false;">
			<select name="PY" id="PY" onchange="OnChange();">
			<!--select name="project_year" id="PY">-->
				<option value="x">x</option>
				<option value="1st">2018</option>
				<option value="2nd">2019</option>
				<option value="3rd">2020</option>
				<option value="4th">2021</option>
			</select>
			<!--<p id="PS"></p>-->
			<!--<select name="project_season" id="PS">
				<option value="spring">Spring</option>
				<option value="summer">Summer</option>
				<option value="fall">Fall</option>
				<option value="winter">Winter</option>
			</select>-->
			<!--<input type=submit name=selection value=selection>-->
			</form>
			<p id="asdf"></p>
			</div>
			</td>
		</tr>
		<tr bgcolor=white>
			<td>
				<table align=left>
				<thead>
				<!--<th id="waterG" boRder=1>
				Group
				</th>-->
				<tr>
					<th>SITE</th>
					<th>F</th>
					<th>W</th>
					<th>Sp</th>
					<th>Su</th>
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
