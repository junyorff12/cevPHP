<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
  	span{
  		color: darkred;
  		font-weight: bold;
  	}
  </style>
</head>
<body>
<div>
    <?php
      	$num = isset($_GET["num"])?$_GET["num"]:1;
      	$tot = 0;
      	echo "<h2>Analizando o numero $num</h2> </br>";
      	echo "Valores multiplos: ";
      	for ($i = 1; $i <=$num ; $i++) {
			if (($num%$i)==0) {
				echo "$i ";
				$tot++;
			}
		}	
		echo "</br></br>Total de multiplos: $tot";
		echo "</br>";		
		if ($tot==2) {
			echo "</br></br>Resultado: $num <span>é primo</span>";
			}else {
				echo "</br></br>Resultado: $num <span>não é primo</span>";
			}
      


    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</div>
</body>
</html>
 