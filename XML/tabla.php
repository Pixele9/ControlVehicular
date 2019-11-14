<?php
    include("../conecta.php");

    // ----------------------------------------
    $con = conectar();

    $sql = "SELECT  P.IdPropietario, P.Nombre, P.RFC, P.CURP 
    FROM Propietarios P";
    // WHERE L.IdConductor = C.IdConductores
    // AND L.IdLicencia = 3";

    $result = consultar($con, $sql);
    // $fila = mysqli_fetch_row($result);
    // ----------------------------------------

    $xml = new DomDocument('1.0', 'UTF-8');
    $xml->formatOutput=true;

    $propietarios = $xml->createElement("propietarios");
    $xml->appendChild($propietarios);

    $n = mysqli_num_rows($result);
    for($a=0; $a<$n; $a++) {
        $fila = mysqli_fetch_row($result);

        $propietario = $xml->createElement("propietario");
        $propietario->setAttribute("id", $fila[0]);
        $propietarios->appendChild($propietario); 

        $nombre = $xml->createElement("nombre", $fila[1]);
        $propietario->appendChild($nombre);
        $rfc = $xml->createElement("rfc", $fila[2]);
        $propietario->appendChild($rfc);
        $curp = $xml->createElement("curp", $fila[3]);
        $propietario->appendChild($curp);

    }
    echo "<xmp>".$xml->saveXML()."</xmp>";
    

    $xml->save("reporte_propietarios.xml") or die ("Error al crear archivo XML");

?>