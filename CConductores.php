<?php
    include("conecta.php");
    $Criterio = $_POST['Criterio'];
    
    $Con = conectar();
    // $SQL = "SELECT * FROM Conductores WHERE $Atributo='$Criterio' LIKE '%'$Criterio'%'";
    $SQL = "SELECT * FROM Conductores WHERE IdConductores LIKE '%f%' 
                                        OR RFC LIKE '%$Criterio%' 
                                        OR Firma LIKE '%$Criterio%' 
                                        OR Foto LIKE '%$Criterio%' 
                                        OR Edad LIKE '%$Criterio%' 
                                        OR Direccion LIKE '%$Criterio%' 
                                        OR FechaNacimiento LIKE '%$Criterio%' 
                                        OR Donador LIKE '%$Criterio%' 
                                        OR CURP LIKE '%$Criterio%' 
                                        OR Genero LIKE '%$Criterio%'";

    // $SQL = "SELECT * FROM Conductores WHERE $Atributo='$Criterio' LIKE '%'$Criterio'%'";
    $Result = consultar($Con, $SQL);
    // Procesamiento
    $n = mysqli_num_rows($Result);
    for($a= 0; $a<$n; $a++) {
        $Row = mysqli_fetch_row($Result);
        print(" 
                <style>  
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 80%;
                    margin: 0 auto;
                  }
                  
                  td, th {
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  }
                  

                </style>
                <table>
                    <tr>
                        <td>$Row[0]</td>
                        <td>$Row[1]</td>
                        <td>$Row[2]</td>
                        <td>$Row[3]</td>
                        <td>$Row[4]</td>
                    </tr>
            </table>"
        );
    }
    cerrar($Con);
?>