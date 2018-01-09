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
    	$ini = isset($_GET["ini"])?$_GET["ini"]:0;
    	$fin = isset($_GET["fin"])?$_GET["fin"]:2;
    	$inc = isset($_GET["inc"])?$_GET["inc"]:1;
    	if ($ini<$fin) {
    		while ($ini<=$fin) {
    			echo "$ini ";
    			$ini += $inc;
    		    
    		}
    	}		
    	elseif ($ini>$fin) {
    		while ($ini>=$fin) {
    		    echo "$ini ";
    		    $ini -= $inc;
    		}
    	  } 
    	else {
    	  		echo 'Opcão invalida';
    	  	}	
    	
    ?>
    <br/><a href="aula11_whileEX3.php">Voltar</a>
</div>
</body>
</html>
 