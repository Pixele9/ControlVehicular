<?php

    $xml = new DomDocument('1.0', 'UTF-8');
    $xml->formatOutput=true;

    $libros = $xml->createElement("libros");
    $xml->appendChild($libros);

    $libro = $xml->createElement("libro");
    $libro->setAttribute("id", 1);
    $libros->appendChild($libro); 

    $nombre = $xml->createElement("nombre", "PHP");
    $libro->appendChild($nombre);
    $precio = $xml->createElement("precio", "$400");
    $libro->appendChild($precio);

    $libro = $xml->createElement("libro");
    $libro->setAttribute("id", 2);
    $libros->appendChild($libro); 

    $nombre = $xml->createElement("nombre", "PHP PARA ESTUDIANTES");
    $libro->appendChild($nombre);
    $precio = $xml->createElement("precio", "$600");
    $libro->appendChild($precio);

    echo "<xmp>".$xml->saveXML()."</xmp>";

    $xml->save("reporte_libros.xml") or die ("Error al crear archivo XML");

?>