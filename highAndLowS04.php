<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>High & Lowゲーム</title>
	</head>
    <body>

		<div align="center">
			<center><font size="6">High&Lowゲーム</font></center>

			<hr>
			<?php
			$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
			$iNum=$_POST['leftCard'];
			$iNum1=$_POST['select'];
			echo"送信されたカード番号:",$iNum;
		 echo '<br/>';
		 echo "High/Low選択:","$iNum1";
		 echo '<br/>';
			?>
		</div>
    </body>
</html>
