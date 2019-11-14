<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    $IdLicencia = $_POST['IdLicencia'];
    $FechaExpedicion = $_POST['FechaExpedicion'];
    $Antiguedad = $_POST['Antiguedad'];
    $Vigencia = $_POST['Vigencia'];
    $LugarExpedicion = $_POST['LugarExpedicion'];
    $Restriccion = $_POST['Restriccion'];
    $IdConductor = $_POST['IdConductor'];


    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "UPDATE Licencias SET FechaExpedicion='$FechaExpedicion', 
                Antiguedad='$Antiguedad',
                Vigencia= '$Vigencia',
                LugarExpedicion='$LugarExpedicion',
                Restriccion='$Restriccion',
                IdConductor='$IdConductor'
            WHERE IdLicencia='$IdLicencia'";
            
    consultar($con, $sql);
    cerrar($con);
?>