<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    // $IdConductores = $_POST['IdConductores'];  // el IdPropietario tiene que ser igual al name del input
    $RFC = $_POST['RFC'];
    $Firma = $_POST['Firma'];
    $Foto = $_POST['Foto'];
    $Edad = $_POST['Edad'];
    $Direccion = $_POST['Direccion'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $Donador = $_POST['Donador'];
    $CURP = $_POST['CURP'];
    $Genero = $_POST['Genero'];


    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "INSERT INTO Conductores (
        IdConductores,
        RFC, 
        Firma,
        Foto,
        Edad,
        Direccion,
        FechaNacimiento,
        Donador,
        CURP,
        Genero
        ) VALUES ( 
        '',
        '$RFC',
        '$Firma', 
        '$Foto',
        '$Edad',
        '$Direccion',
        '$FechaNacimiento',
        '$Donador',
        '$CURP',
        '$Genero'
        )";

    consultar($con, $sql);
    cerrar($con);
    // print("IdConductores = ".$IdConductores."<br>");
    // print("RFC = ".$RFC."<br>");
    // print("Firma = ".$Firma."<br>");
    // print("Foto = ".$Foto."<br>");
    // print("Edad = ".$Edad."<br>");
    // print("Direccion= ".$Direccion."<br>");
    // print("FechaNacimiento= ".$FechaNacimiento."<br>");
    // print("Donador= ".$Donador."<br>");
    // print("CURP= ".$CURP."<br>");
    // print("Genero= ".$Genero."<br>");
?>