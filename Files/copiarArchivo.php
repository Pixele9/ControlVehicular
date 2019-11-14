<?php
    // abre el archivo txt
    $file = fopen("datos1.txt", "r");
    $file2 = fopen("datos2.txt", "w");
    
    // leer todas las líneas de código
    // while($line) {}
    while(!feof($file)) {
        $line = fgets($file);
        // print($line."<br>");
        fwrite($file2, $line);
    }

    fclose($file);
    fclose($file2);
?>
