<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		include "header.php";
?>


<?php 
		include "footer.php";
	} else {
		header("location:../index.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4" style="text-align: center;">Gestor de Archivos</h1>
			<hr>
			<div id="tablaGestorArchivos"></div>
		</div>
	</div>

</body>
</html>