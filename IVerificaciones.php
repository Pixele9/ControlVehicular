<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    $Tipo = $_POST['Tipo'];
    $Vigencia = $_POST['Vigencia'];
    $Dictamen = $_POST['Dictamen'];
    $IdVehiculo = $_POST['IdVehiculo'];

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "INSERT INTO Verificaciones(
        Folio,
        Tipo, 
        Vigencia, 
        Dictamen,
        IdVehiculo
        ) VALUES (
        '', 
        '$Tipo', 
        '$Vigencia',
        '$Dictamen',
        '$IdVehiculo'
        )";

    consultar($con, $sql);
    cerrar($con);

    // print("Folio = ".$Folio."<br>");
    // print("Tipo = ".$Tipo."<br>");
    // print("Vigencia = ".$Vigencia."<br>");
    // print("Dictamen = ".$Dictamen."<br>");
    // print("IdVehiculo = ".$IdVehiculo."<br>");
?>