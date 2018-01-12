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

    	$op = isset($_GET["tab"])?$_GET["tab"]:1;
    	echo "Mostrando a tabuada de $op<br/>";
    	$c = 1;
    	do {
    		$r = $op * $c;
    	    echo "$op * $c = $r <br/>";
    	    $c++;
		}while ($c<=10);
    	
    	
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>	
</body>
</html>
 