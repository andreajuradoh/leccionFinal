<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<body>
	<header>
	<nav>
	 <a href="inicio.html"> Inicio </a>
	 <a href="nosotros.html"> Nosotros </a>
 	 <a href="servicio.html"> Servicios </a>
	 <a href="contactenos.html"> Contáctenos </a>
	</nav>
	</header>

<aside>

<?php
	//obtener el valor d ID que viene del metodo GET a traves de HTTP
	$id= $_GET["id"];
	echo "valor de id es: " .$id;
	include_once('DemoCollector.php');
	include_once('Demo.php');
	$DemoCollectorObj = new DemoCollector();
	$ObjDemo = $DemoCollectorObj->showDemo($id);
	print_r($ObjDemo);
?>

<h2> Editar objeto demo </h2>

	<form action="actualizar.php" align="center" method="post">
	  Id:<br>
	  <input type="text" name="id_demo" value="<?php echo $ObjDemo->getIdDemo(); ?>" readonly/> <br>
	  Nombre:<br>
	  <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" autofocus required/><br>
	<input type="submit" value="Guardar">
	<a href= 'index.php'> Regresar </a>
	
	</form>


