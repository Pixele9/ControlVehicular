<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    $IdMultas = $_POST['IdMultas']; // el IdPropietario tiene que ser igual al name del input
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
    $sql = "UPDATE Multas SET Motivo='$Motivo', 
                Agente='$Agente', 
                Fecha= '$Fecha', 
                Hora='$Hora',
                Lugar='$Lugar',
                Descuento='$Descuento',
                Vehiculo='$Vehiculo',
                IdLicencia='$IdLicencia'
            WHERE $IdMultas='$IdMultas'";

    consultar($con, $sql);
    cerrar($con);
?>