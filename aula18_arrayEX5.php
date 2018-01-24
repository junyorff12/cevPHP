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
 		$v = array("nome" => "Jr", "idade" => 30, "peso" => 84.5);
 		$v["fuma"] = "não";
 		foreach($v as $c => $v){
 			echo("$c => $v ");
 		}
 		
    ?>
	</pre>
</div>
</body>
</html>
 