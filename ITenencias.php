<?php
    include("conecta.php");

    // Variable interna = $_REQUEST['Variable exacta']
    $Monto = $_REQUEST['Monto'];
    $AnioTenencia = $_REQUEST['AnioTenencia'];
    // $Descuento = $_REQUEST['Descuento'];
    $IdVehiculo = $_REQUEST['IdVehiculo'];
    

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "INSERT INTO Tenencias (
        IdTenencia,
        Monto, 
        AnioTenencia, 
        IdVehiculos
        ) VALUES (
        '' , 
        '$Monto', 
        '$AnioTenencia', 
        '$IdVehiculo'
        )";

    consultar($con, $sql);
    cerrar($con);

    // print("IdTenencia = ".$IdTenencia."<br>");
    // print("Monto = ".$Monto."<br>");
    // print("Año de Tenencia = ".$AnioTenencia."<br>");
    // print("Descuento = ".$Descuento."<br>");
    // print("IdVehiculo = ".$IdVehiculo."<br>");
?>