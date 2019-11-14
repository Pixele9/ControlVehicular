<?php
    include("conecta.php");
    // Variable interna = $_REQUEST['Variable exacta']
    $IdTenencia = $_REQUEST['IdTenencia'];
    $Monto = $_REQUEST['Monto'];
    $AnioTenencia = $_REQUEST['AnioTenencia'];
    $IdVehiculos = $_POST['IdVehiculos'];
    

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "UPDATE Tenencias SET Monto='$Monto',
                AnioTenencia= '$AnioTenencia',
                IdVehiculos='$IdVehiculos'
            WHERE IdTenencia='$IdTenencia'";
    consultar($con, $sql);
    cerrar($con);

    // print("IdTenencia = ".$IdTenencia."<br>");
    // print("Monto = ".$Monto."<br>");
    // print("Año de Tenencia = ".$AnioTenencia."<br>");
    // print("Descuento = ".$Descuento."<br>");
    // print("IdVehiculo = ".$IdVehiculo."<br>");
?>