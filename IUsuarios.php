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
    $sql = "INSERT INTO Usuarios (
        Usuario,
        Contrasenia, 
        Tipo, 
        Estado,
        Intento,
        Bloqueado
        ) VALUES ( 
        '$Usuario', 
        '$Contrasenia', 
        '$Tipo',
        '$Estado',
        '$Intento',
        '$Bloqueado'
        )";

    consultar($con, $sql);
    cerrar($con);

    
    // print("Usaurio = ".$Usaurio."<br>");
    // print("Contraseña = ".$Contrasenia."<br>");
    // print("Tipo = ".$Tipo."<br>");
    // print("Estado = ".$Estado."<br>");
    // print("Intento = ".$Intento."<br>");
    // print("Bloqueado?= ".$Bloqueado."<br>");
?>