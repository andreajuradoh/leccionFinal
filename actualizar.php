<!DOCTYPE HTML>
<html>
<body>
	

<?php


	$nombre=$_POST["nombre"];
	$id_demo=$_POST["id_demo"];

	echo "Edicion en proceso... </br>";


		include_once("DemoCollector.php");
		$DemoCollectorObj = new DemoCollector();
		$DemoCollectorObj->updateDemo($id_demo, $nombre);
		
		echo "id :" .$id_demo." actualizado a:" .$nombre." </br>";
?>

	<a href= 'index.php'> Regresar </a>
		

</body>
</html>

