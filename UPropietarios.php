<?php
    include("conecta.php");

    // Variable interna = $_POST['Variable exacta']
    $IdPropietario = $_POST['IdPropietario'];
    $CURP = $_POST['CURP']; // el IdPropietario tiene que ser igual al name del input
    $RFC = $_POST['RFC'];
    $Nombre = $_POST['Nombre'];
    $Direccion = $_POST['Direccion'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $TipoPersona = $_POST['TipoPersona'];

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "UPDATE Propietarios SET RFC='$RFC', 
                                        Nombre='$Nombre', 
                                        Direccion= '$Direccion', 
                                        FechaNacimiento='$FechaNacimiento',
                                        CURP='$CURP',
                                        TipoPersona='$TipoPersona'
            WHERE IdPropietario='$IdPropietario'";
    
    consultar($con, $sql);
    cerrar($con);
?>