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
 		//$n = array(3,5,8,2);
    	$n = range(5, 20, 2);//range criar um vetor com (inicio,fim,passo)o passo é opcional.
 		$n[] = 7;
 		print_r($n);	
    ?>
	</pre>
</div>
</body>
</html>
 