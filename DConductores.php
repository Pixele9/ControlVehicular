<?php
    include("conecta.php");
    $Conductor = $_POST["Conductor"];

    $Con = conectar();
    $SQL = "DELETE FROM Conductores WHERE IdConductores='$Conductor'";
    consultar($Con, $SQL);
    // cerrar($Con);
    
    if(mysqli_affected_rows($Con) >= 1) {
        print("Conductor <b>".$Conductor."</b> eliminado correctamente");
        print("Filas afectadas: ".mysqli_affected_rows($Con));
    } elseif (mysqli_affected_rows($Con) == -1) {
        print("<h2>No se pudo eliminar el registro por que tiene una llave foránea</h2>");
    } else {
        echo("<h2>El conductor no existe en la Base de Datos</h2>");
        print("<b>0</b> registros eliminados");
    }

    cerrar($Con);
    
?>