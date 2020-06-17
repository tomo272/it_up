<html>
<head>

<meta http-equiv="content-Type"content="text/html;charset=UTF-8">
</head>
<body>
  <div align="center">
<font size="6">High&Lowゲーム</font>
<hr>

<?php
$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
$leftCard  = mt_rand(0,13);
 ?>

 <form action="higAndLowS07.php"method="post">

   <?php
     echo '<img src="../cards/',$cards[$leftCard],'">';
     print '<img src="../cards/bg.png">';
     echo'<input type="hidden" name="leftCard" value="',$leftCard,'">';
   echo '<br/>';
   ?>



High<input type="radio"name="select"value="High">
Low<input type="radio"name="select"value="Low">
<br>
<input type="submit"value="決定">


</div>

</form>
</body>
</html>
