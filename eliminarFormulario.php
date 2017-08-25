<!DOCTYPE HTML>
<html>
<body>
	

<?php


	
	$id=$_GET["id"];

	echo "Eliminar registro... </br>";


		include_once("DemoCollector.php");
		$DemoCollectorObj = new DemoCollector();
		$DemoCollectorObj->deleteDemo($id);
		
		echo "id :" .$id." eliminado" ;
?>

	<a href= 'index.php'> Regresar </a>
		

</body>
</html>

