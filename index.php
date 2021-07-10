<table border="1" style ="border-collapse: collapse">
 
<?php
	//九九の表の縦方向に出力するためのループ
	for( $i = 1 ; $i <= 9 ; $i++ ){
 
		//テーブルの縦方向のタグを出力
		echo "<tr>";
 
		//九九の表の横方向に出力するためのループ
		for( $j = 1 ; $j <= 9 ; $j++ ){
			echo "<td>";
			echo $i * $j;
 			echo "</td>";
		}
 
		//テーブルの縦方向の閉じタグを出力
		echo "</tr>";
	}
 
?>
</table>