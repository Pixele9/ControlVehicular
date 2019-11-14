<?php
	include("../conecta.php");

	$con = conectar();

					// id del tag
	$UserF = $_POST['user'];
	$PassF = $_POST['password'];
	// echo $UserF;
	// echo "<br>";
	// echo $PassF;
	
	$sql = "SELECT * FROM Usuarios WHERE Usuario='$UserF'";
	$res = consultar($con, $sql);
	$n = mysqli_num_rows($res);
	$line = mysqli_fetch_row($res);
	print($n);

	if($n==1) {
		// usuario existe
		if($PassF==$line[1]) {
			// la contraseña coincide
			print("Acceso Correcto");
		} else {
			print("Acceso Incorrecto: Contraseña");
		}
	} else {
		// no existe el usuario
		print("Acceso Incorrecto: Usuario No Existe");
	}

?>