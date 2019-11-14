<?php
    include("conecta.php");
    // Variable interna = $_GET['Variable exacta']
    $Usuario = $_GET['Usuario']; // el IdPropietario tiene que ser igual al name del input
    $Contrasenia = $_GET['Contrasenia'];
    $Tipo = $_GET['Tipo'];
    $Estado = $_GET['Estado'];
    $Intento = $_GET['Intento'];
    $Bloqueado = $_GET['Bloqueado'];

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "UPDATE Usuarios SET Contrasenia='$Contrasenia', 
                Tipo='$Tipo', 
                Estado= '$Estado', 
                Intento='$Intento',
                Bloqueado='$Bloqueado'
            WHERE Usuario='$Usuario'";

    consultar($con, $sql);
    cerrar($con);

    
    // print("Usaurio = ".$Usaurio."<br>");
    // print("Contraseña = ".$Contrasenia."<br>");
    // print("Tipo = ".$Tipo."<br>");
    // print("Estado = ".$Estado."<br>");
    // print("Intento = ".$Intento."<br>");
    // print("Bloqueado?= ".$Bloqueado."<br>");
?>