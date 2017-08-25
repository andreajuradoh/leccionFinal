<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<body>
	

<aside>

<?php
 	//pagina.php

		include_once("DemoCollector.php");

		$id =1;

		$DemoCollectorObj = new DemoCollector();

		?>
<br/>
<?php

		foreach ($DemoCollectorObj->showDemos() as $c){
		echo "<div>";
		echo $c->getIdUsuario() . " && " .$c->getNombre() . " && " .$c->getTipo() . " && " .$c->getFechaNac();
		echo " <a href='formularioPerfil.php?id=". $c->getIdUsuario() . "'>Ver perfil </a> " ;
		
		echo "</div>";
		}


?>


</body>
</html>

