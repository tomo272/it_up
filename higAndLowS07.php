<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>High & Lowゲーム</title>
	</head>
    <body>

		<div align="center">
			<font size="6">High&Lowゲーム</font>

			<hr>

<?php
	    $cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
      $rightCard = mt_rand(0,13);

      $iNum=$_POST['leftCard'];
      $highOrLow = $_POST['select'];

      echo '<img src="../cards/',$cards[$iNum],'">';
      echo '<img src="../cards/',$cards[$rightCard],'"><br>';
      echo '「',$highOrLow,'」を選択しました';
		 echo '<br/>';
     if($iNum < $rightCard){
       $result = "High";
       echo 'You Win!';
     }elseif($iNum > $rightCard){
       $result = "Low";
       echo 'You Lose...';
     }elseif($iNum == $rightCard){
       $result = "You Win!";
       echo 'You Win!';
     }else{
       $result = $highOrLow;
     }

     echo '<br/>';


?>

<a href="higAndLowS03.php">もう一度挑戦</a>

		</div>
    </body>
</html>
