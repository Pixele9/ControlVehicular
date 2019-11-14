<?php
    include("conecta.php");

    // Variable interna = $_POST['Variable exacta']
    $CURP = $_POST['CURP']; // el IdPropietario tiene que ser igual al name del input
    $RFC = $_POST['RFC'];
    $Nombre = $_POST['Nombre'];
    $Direccion = $_POST['Direccion'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $TipoPersona = $_POST['TipoPersona'];

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "INSERT INTO Propietarios VALUES (
        '' , 
        '$CURP', 
        '$RFC', 
        '$Nombre',
        '$Direccion',
        '$FechaNacimiento',
        '$TipoPersona'
    )";
    
    consultar($con, $sql);
    cerrar($con);


    // print("Propietario = ".$IdPropietario."<br>");
    // print("CURP = ".$CURP."<br>");
    // print("RFC = ".$RFC."<br>");
    // print("Nomrbe = ".$Nombre."<br>");
    // print("Dirección = ".$Direccion."<br>");
    // print("Fecha de Nacimiento= ".$FechaNacimiento."<br>");
    // print("Tipo de Persona = ".$TipoPersona."<br>");
?>