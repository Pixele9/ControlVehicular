<?php
    include("conecta.php");
    $Multa = $_POST["Multa"];

    $Con = conectar();
    $SQL = "DELETE FROM Multas WHERE IdMultas='$Multa'";
    consultar($Con, $SQL);
    // cerrar($Con);
    
    if(mysqli_affected_rows($Con) >= 1) {
        print("Multa <b>".$Multa."</b> eliminada correctamente<br>");
        print("Registros modificados: ".mysqli_affected_rows($Con));
    } elseif (mysqli_affected_rows($Con) == -1) {
        print("<h2>No se pudo eliminar el registro por que tiene una llave foránea</h2>");
    } else {
        echo("<h2>La multa no existe en la Base de Datos</h2>");
        print("<b>0</b> registros eliminados");
    }

    cerrar($Con);
    
?>