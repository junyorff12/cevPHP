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
      	function soma(){
      		$arr = func_get_args();
      		$tot = func_num_args();
      		$s = 0;
      		for ($i = 0; $i < $tot; $i++) {
      			$s += $arr[$i];
      		}
      		return $s;
      	}


      	$r = soma(3,2,5);
      	echo "A soma vale $r";
      
    ?>
</div>
</body>
</html>
 