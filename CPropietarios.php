<?php
    include("conecta.php");
    $Criterio = $_POST['Criterio'];
    $Atributo = $_POST['Atributo'];

    $Con = conectar();
    $SQL = "SELECT * FROM Propietarios WHERE $Atributo='$Criterio'";
    $Result = consultar($Con, $SQL);
    // Procesamiento
    $n = mysqli_num_rows($Result);
    for($a= 0; $a<$n; $a++) {
        $Row = mysqli_fetch_row($Result);
        // echo $Row[0]."----".$Row[1]."----".$Row[2]."----".$Row[3]."----".$Row[4]."----"."<br>";
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
                  
                  tr:nth-child(even) {
                    background-color: #dddddd;
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