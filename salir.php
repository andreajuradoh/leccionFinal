<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<body>
	

<?php
	if (isset($_SESSION['MiSession'])) {
		session_destroy();
		echo "Se ha destruido exitosamente <br>";
		echo "<a href= 'index.php'> Regresar</a>";
	}else{
		echo "ERROR... <br>";
		echo "<a href= 'index.php'> Regresar </a>";
?>


	<form action="login.php" align="center" method="post">
	  Usuario:<br>
	  <input type="text" name="Usuario"><br>
	  Clave:<br>
	  <input type="text" name="Clave"><br><br>
	  <input type="submit" value="Enviar">
	</form>
<?php } ?>

</body>
</html>

