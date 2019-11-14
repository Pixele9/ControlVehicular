<?php
    include("conecta.php");
    $Licencia = $_REQUEST["IdLicencia"];

    $Con = conectar();
    $SQL = "DELETE FROM Licencias WHERE IdLicencia='$Licencia'";
    consultar($Con, $SQL);
    // cerrar($Con);
    
    if(mysqli_affected_rows($Con) >= 1) {
        print("Licencia <b>".$Licencia."</b> eliminada correctamente");
    } elseif (mysqli_affected_rows($Con) == -1) {
        print("<h2>No se pudo eliminar el registro por que tiene una llave foránea</h2>");
    } else {
        echo("<h2>La licencia no existe en la Base de Datos</h2>");
        print("<b>0</b> registros eliminados");
    }

    cerrar($Con);
    
?>