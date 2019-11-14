<?php
    include("conecta.php");
    $Tenencia = $_POST["Tenencia"];

    $Con = conectar();
    $SQL = "DELETE FROM Tenencias WHERE IdTenencia='$Tenencia'";
    consultar($Con, $SQL);
    // cerrar($Con);
    
    if(mysqli_affected_rows($Con) >= 1) {
        print("Tenencia <b>".$Tenencia."</b> eliminada correctamente<br>");
        print("Registros modificados: ".mysqli_affected_rows($Con));
    } elseif (mysqli_affected_rows($Con) == -1) {
        print("<h2>No se pudo eliminar el registro por que tiene una llave foránea</h2>");
    } else {
        echo("<h2>La Tenencia no existe en la Base de Datos</h2>");
        print("<b>0</b> registros eliminados");
    }

    cerrar($Con);
    
?>