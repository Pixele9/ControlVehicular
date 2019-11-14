<?php
    // abre el archivo txt
    $writeFile = fopen("registroDatos.txt", "a");
    $readFile = fopen("registroDatos.txt", "r");
    $fileName = "registroDatos.txt";
    $file = file_get_contents($fileName);

    $name = $_POST['nombre'];
    $semester = $_POST['semestre'];
    $nas = $_POST['nas'];

    if(strpos($file, $name)) {
    // if(strpos(file_get_contents($readFile), $name) !== false) {
        print("Ya existe ese nombre");
    } else {
        // el nombre no existe en el archivo
        fwrite($writeFile, "Nombre: ".$name."\n");
        fwrite($writeFile, "Semestre: ".$semester."\n");
        fwrite($writeFile, "N/As: ".$nas."\n\n");
    }

    fclose($writeFile);
?>
