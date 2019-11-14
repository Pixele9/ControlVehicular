<?php
    include("conecta.php");
    $Verificacion = $_POST["Verificacion"];

    $Con = conectar();
    $SQL = "DELETE FROM Verificaciones WHERE Folio='$Verificacion'";
    consultar($Con, $SQL);
    // cerrar($Con);
    
    if(mysqli_affected_rows($Con) >= 1) {
        print("Verificacion <b>".$Vehiculo."</b> eliminada correctamente<br>");
        print("Registros modificados: ".mysqli_affected_rows($Con));
    } elseif (mysqli_affected_rows($Con) == -1) {
        print("<h2>No se pudo eliminar el registro por que tiene una llave foránea</h2>");
    } else {
        echo("<h2>La Verificacion no existe en la Base de Datos</h2>");
        print("<b>0</b> registros eliminados");
    }

    cerrar($Con);
    
?>