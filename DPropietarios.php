<?php
    include("conecta.php");
    $Propietario = $_POST["Propietario"];

    $Con = conectar();
    $SQL = "DELETE FROM Propietarios WHERE IdPropietario='$Propietario'";
    consultar($Con, $SQL);
    // cerrar($Con);
    
    if(mysqli_affected_rows($Con) >= 1) {
        print("Propietario <b>".$Propietario."</b> eliminado correctamente<br>");
        print("Registros modificados: ".mysqli_affected_rows($Con));
    } elseif (mysqli_affected_rows($Con) == -1) {
        print("<h2>No se pudo eliminar el registro por que tiene una llave foránea</h2>");
    } else {
        echo("<h2>El propietario no existe en la Base de Datos</h2>");
        print("<b>0</b> registros eliminados");
    }

    cerrar($Con);
    
?>