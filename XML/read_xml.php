<?php
    if(file_exists("reporte_libros.xml")) {
        $xml = simplexml_load_file("reporte_libros.xml");
        $nombre = $xml->libro[0]->nombre;
        echo $xml->libro[0]->precio;

        $nombre = "PEDROOOO";
        echo $nombre;
    } else {
        exit('Error abriendo reporte_libros.xml.');
    }

?>