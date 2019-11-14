<?php
    include("conecta.php");
    // Variable interna = $_POST['Variable exacta']
    $Folio = $_POST['Folio'];
    $Tipo = $_POST['Tipo'];
    $Vigencia = $_POST['Vigencia'];
    $Dictamen = $_POST['Dictamen'];
    $IdVehiculo = $_POST['IdVehiculo'];

    $con = conectar(); // conexión guardada en con
    // INSERT INTO tabla VALUES (“v1”, “v2”, “v3”, “”...  “vn”);
    $sql = "UPDATE Verificaciones SET Tipo='$Tipo', 
                Vigencia='$Vigencia', 
                Dictamen= '$Dictamen', 
                IdVehiculo='$IdVehiculo'
            WHERE Folio='$Folio'";

    consultar($con, $sql);
    cerrar($con);

    // print("Folio = ".$Folio."<br>");
    // print("Tipo = ".$Tipo."<br>");
    // print("Vigencia = ".$Vigencia."<br>");
    // print("Dictamen = ".$Dictamen."<br>");
    // print("IdVehiculo = ".$IdVehiculo."<br>");
?>