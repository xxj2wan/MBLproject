<?php
function print_title($div,$class){
	print("	<div id='$div'>
			<nav>
			<ul>
			<li><a class='$class' href='main.php' target=main>Home</a></li>
			<li><a class='$class' href='Intro.php' target=main>Intro</a></li>
			<li><a class='$class' href='Analysis.php' target=main>Analysis</a></li>
			<li><a class='$class' href='community.php' target=main>Community</a></li>
			</ul>
			</nav>
		");
}
?>
