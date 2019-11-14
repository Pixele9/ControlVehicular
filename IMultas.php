<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    // $IdMulta = $_POST['IdMulta']; // el IdPropietario tiene que ser igual al name del input
    $Motivo = $_POST['Motivo'];
    $Agente = $_POST['Agente'];
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Lugar = $_POST['Lugar'];
    $Descuento = $_POST['Descuento'];
    $Vehiculo = $_POST['Vehiculo'];
    $IdLicencia = $_POST['IdLicencia'];

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "INSERT INTO Multas (
        IdMultas,
        Motivo,
        Agente, 
        Fecha, 
        Hora,
        Lugar,
        Descuento,
        Vehiculo,
        IdLicencia
        ) VALUES ( 
        '',
        '$Motivo', 
        '$Agente', 
        '$Fecha',
        '$Hora',
        '$Lugar',
        '$Descuento',
        '$Vehiculo',
        '$IdLicencia'
        )";

    consultar($con, $sql);
    cerrar($con);
    // print("IdMulta = ".$IdMulta."<br>");
    // print("Motivo = ".$Motivo."<br>");
    // print("Agente = ".$Agente."<br>");
    // print("Fecha = ".$Fecha."<br>");
    // print("Hora = ".$Hora."<br>");
    // print("Lugar= ".$Lugar."<br>");
    // print("Descuento = ".$Descuento."<br>");
    // print("Vehiculo = ".$Vehiculo."<br>");
    // print("IdLicencia = ".$IdLicencia."<br>");
?>