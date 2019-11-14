<?php
    include("conecta.php");

    // ----------------------------------------
    $con = conectar();

    $sql = "SELECT  L.IdLicencia, L.FechaExpedicion, L.Antiguedad, L.Vigencia, L.LugarExpedicion, L.Restriccion, L.IdConductor 
    FROM Licencias L
    WHERE L.IdLicencia = ".$_REQUEST['idlicencia'];

    $result = consultar($con, $sql);
    // $fila = mysqli_fetch_row($result);
    // ----------------------------------------

    $xml = new DomDocument('1.0', 'UTF-8');
    $xml->formatOutput=true;

    $licencias = $xml->createElement("licencias");
    $xml->appendChild($licencias);

    $n = mysqli_num_rows($result);
    for($a=0; $a<$n; $a++) {
        $fila = mysqli_fetch_row($result);

        $licencia = $xml->createElement("licencia");
        $licencia->setAttribute("id", $fila[0]);
        $licencias->appendChild($licencia); 

        $nombre = $xml->createElement("FechaExpedicion", $fila[1]);
        $licencia->appendChild($nombre);
        $Antiguedad = $xml->createElement("Antiguedad", $fila[2]);
        $licencia->appendChild($Antiguedad);
        $Vigencia = $xml->createElement("Vigencia", $fila[3]);
        $licencia->appendChild($Vigencia);
        $LugarExpedicion = $xml->createElement("LugarExpedicion", $fila[4]);
        $licencia->appendChild($LugarExpedicion);
        $Restriccion = $xml->createElement("Restriccion", $fila[5]);
        $licencia->appendChild($Restriccion);
        $IdConductor = $xml->createElement("IdConductor", $fila[6]);
        $licencia->appendChild($IdConductor);
    }
    echo "<xmp>".$xml->saveXML()."</xmp>";
    

    // $xml->save("reporte_propietarios.xml") or die ("Error al crear archivo XML");

?>