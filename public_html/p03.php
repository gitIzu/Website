<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>
			半か？丁か？
		</title>
	</head>
<body>
	<h1>
		半か？丁か？
	</h1>
	<h2>
	<?php
		$dice1=rand(1,6);
		$dice2=rand(1,6);
		echo "１つ目のサイコロは".$dice1."です。<br>";
		echo "２つ目のサイコロは".$dice2."です。<br>";
	?>
	</h2>
</body>
</html>