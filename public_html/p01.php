<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>PHPによる時刻表示</title>
	</head>
	<body>
		<h1>PHPによる時刻表示</h1>
		<?php
			ini_set("date.timezone", "Asia/Tokyo");
			echo "今日は".date("Y年m月d日") ."です。";
			echo "現在".date("H時i分s秒") ."です。";
		?>
		<p>
		<?php
			$hour = date("H");
			if($hour<10){
			echo"おはようございます";
			}
			elseif($hour<17){
			echo"こんにちは";
			}
			else{
			echo"こんばんは";
			}
		?>
		</p>
	</body>
</html>