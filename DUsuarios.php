<?php
    include("conecta.php");
    $Usuario = $_GET["Usuario"];

    $Con = conectar();
    $SQL = "DELETE FROM Usuarios WHERE Usuario='$Usuario'";
    consultar($Con, $SQL);
    // cerrar($Con);
    
    if(mysqli_affected_rows($Con) >= 1) {
        print("Usuario <b>".$Usuario."</b> correctamente");
    } else {
        echo("<h2>El usuario no existe en la Base de Datos</h2>");
    }

    cerrar($Con);
    
?>