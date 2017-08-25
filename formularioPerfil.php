<!DOCTYPE html>
<html>
<body>


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



<h2> PERFIL </h2>
<form align="center" method="post">
  Nombre:<br>
  <input type="text"  name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" /> <br>
  Tipo:<br>
  <input type="text"  name="tipo" value="<?php echo $ObjDemo->getTipo(); ?>"/> <br>
  Fecha de nacimiento:<br>
  <input type="text"  name="fechaNac" value="<?php echo $ObjDemo->getFechaNac(); ?>"/> <br>
  
 <a href= 'eliminarFormulario.php'> Eliminar </a>
 <a href= 'editarFormulario.php'> Editar </a>

 
</form>
</body>
</html>
