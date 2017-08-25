<?php
	session_start();
?>



<html>
<head>
</head>

<body>
<div id="main">
	<?php
		$valor=$_POST["nombre"];
		
		echo 'Hola  '. htmlspecialchars($valor) . '!';
		
		include_once('DemoCollector.php');

		$DemoCollectorObj = new DemoCollector();
		$DemoCollectorObj->createDemo($valor);

		echo "Valor agregado </br>"			
	?>
<div> <a href="index.php"> Volver al Inicio </a> </div>
</div>
</body>
</html>





