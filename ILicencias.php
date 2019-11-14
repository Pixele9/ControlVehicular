<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    $FechaExpedicion = $_POST['FechaExpedicion'];
    $Antiguedad = $_POST['Antiguedad'];
    $Vigencia = $_POST['Vigencia'];
    $LugarExpedicion = $_POST['LugarExpedicion'];
    $Restriccion = $_POST['Restriccion'];
    $IdConductor = $_POST['IdConductor'];


    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "INSERT INTO Licencias (
        IdLicencia,
        FechaExpedicion, 
        Antiguedad,
        Vigencia,
        LugarExpedicion,
        Restriccion,
        IdConductor
        ) VALUES ( 
        '',
        '$FechaExpedicion',
        '$Antiguedad', 
        '$Vigencia',
        '$LugarExpedicion',
        '$Restriccion',
        '$IdConductor'
        )";

    consultar($con, $sql);
    cerrar($con);

    // print("IdLicencia = ".$IdLicencia."<br>");
    // print("FechaExpedicion = ".$FechaExpedicion."<br>");
    // print("Antiguedad = ".$Antiguedad."<br>");
    // print("Vigencia = ".$Vigencia."<br>");
    // print("LugarExpedicion = ".$LugarExpedicion."<br>");
    // print("IdConductor= ".$IdConductor."<br>");
?>