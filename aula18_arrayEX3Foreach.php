<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  
</head>
<body>
<div>
	<pre>
    <?php
 		$v  = array(0 => 5, 1 => 9, 2 => 8, 3 => 7);
 		$v[] = 7;
 		unset($v[2]);//desaloca, remove o indice pelo vetor.
 		print_r($v); 
 		}
    ?>
	</pre>
</div>
</body>
</html>
 