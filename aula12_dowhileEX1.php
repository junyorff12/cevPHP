<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
    	$c = 1;
    	do {
    		echo "$c ";
    		$c++;
    	} while ($c<=10);
    echo "<br/>";	
    	$c = 10;
    	do {
    		echo "$c ";
    		$c--;
    	} while ($c>=1);
    	
    ?>
    <br/><a href="aula12_dowhileEX1.php">Voltar</a>
</div>
</body>
</html>
 