<?php
    function conectar() {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dataBase = "controlvehicular201922";
        $con = mysqli_connect($serverName, $userName, $password, $dataBase); // regresa un objeto
        return $con;
    }

    function consultar($con, $sql) {
        $res = mysqli_query($con, $sql) or die (mysqli_error($con)); // resultado del query
        return $res; // 1 , 0 o relación
    }

    function cerrar($con) {
        mysqli_close($con);
    }

?>