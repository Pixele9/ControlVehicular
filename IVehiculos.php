<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    $NumSerie = $_POST['NumSerie'];
    $Placa = $_POST['Placa'];
    $Motor = $_POST['Motor'];
    $Factura = $_POST['Factura'];
    $Version = $_POST['Version'];
    $Anio = $_POST['Anio'];
    $Color = $_POST['Color'];
    $Modelo = $_POST['Modelo'];
    $Origen = $_POST['Origen'];
    $NumPuertas = $_POST['NumPuertas'];
    $TipoCombustible = $_POST['TipoCombustible'];
    $Cilindraje = $_POST['Cilindraje'];
    $IdPropietario = $_POST['IdPropietario'];

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "INSERT INTO Vehiclos VALUES (
        '' , 
        '$NumSerie', 
        '$Placa', 
        '$Motor',
        '$Factura',
        '$Version',
        '$Anio',
        '$Color',
        '$Modelo',
        '$Origen',
        '$NumPuertas',
        '$TipoCombustible',
        '$Cilindraje',
        '$IdPropietario'
    )";
    
    consultar($con, $sql);
    cerrar($con);
    // print("IdVehiculos = ".$IdVehiculos."<br>");
    // print("NumSerie = ".$NumSerie."<br>");
    // print("Placa = ".$Placa."<br>");
    // print("Motor = ".$Motor."<br>");
    // print("Factura = ".$Factura."<br>");
    // print("Version = ".$Version."<br>");
    // print("Año = ".$Anio."<br>");
    // print("Color = ".$Color."<br>");
    // print("Modelo = ".$Modelo."<br>");
    // print("Origen = ".$Origen."<br>");
    // print("NumPuertas = ".$NumPuertas."<br>");
    // print("TipoCombustible = ".$TipoCombustible."<br>");
    // print("Cilindraje = ".$Cilindraje."<br>");
    // print("IdPropietario = ".$IdPropietario."<br>");
?>