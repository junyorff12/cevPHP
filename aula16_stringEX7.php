<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  
</head>
<body>
<div>
    <?php
 		$n = "Junyor FF12";
 		$l = str_pad($n, 30, " ", STR_PAD_RIGHT); //STR_PAD_CENTER, STR_PAD_LEFT
 		echo $l;
    ?>
</div>
</body>
</html>
 