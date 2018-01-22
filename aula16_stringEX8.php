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
 		$txt = str_repeat("Php", 5);// repete a string entre aspa.
 		print("O texto gerado foi $txt");
 		echo "</br>";
 		$f =  "Gosto de estudar matematica";
 		//$new_f = str_replace("matematica", "PHP", $f);//replace uma strnig pela outra.
 		$new_f = str_ireplace("matematica", "PHP", $f);//replace uma strnig pela outra, o ireplace ignore se vai o termo do search esta diferente(maiusc ou minusc).
 		print($new_f);	


    ?>
</div>
</body>
</html>
 