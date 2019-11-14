<?php
     $Criterio=$_POST['Criterio'];
	 $Atributo=$_POST['Atributo'];
	 
	 include("Conecta.php");
	 $Con=Conectar();
	 $SQL="SELECT * FROM vehiculo WHERE $Atributo='$Criterio'";
	 $Result=Consultar($Con,$SQL);
	 //Procesamiento de datos
	 $n=mysqli_num_rows($Result);// aqui se hace la tabla abajo
	 echo "<table border='1'> 
	  <tr>
		<th>idVehiculo</th>
		<th>NumSerie</th>
		<th>Placa</th>
		<th>Motor</th>
		<th>Factura</th>
		<th>Anio</th>
		<th>Color</th>
		<th>Modelo</th>
		<th>Origen</th>
		<th>Tipo</th>
		<th>Puerta</th>
		<th>Transmision</th>
		<th>Cilindraje</th>
		<th>Tcombustible</th>
		<th>Propietario
		</tr>";
	while($row = mysqli_fetch_array($Result))
		{
			echo "<tr>";
			echo "<td>" . $row['idVehiculo'] . "</td>";
			echo "<td>" . $row['NumSerie'] . "</td>";
			echo "<td>" . $row['Placa'] . "</td>";
			echo "<td>" . $row['Motor'] . "</td>";
			echo "<td>" . $row['Factura'] . "</td>";
			echo "<td>" . $row['Anio'] . "</td>";
			echo "<td>" . $row['Color'] . "</td>";
			echo "<td>" . $row['Modelo'] . "</td>";
			echo "<td>" . $row['Origen'] . "</td>";
			echo "<td>" . $row['Tipo'] . "</td>";
			echo "<td>" . $row['Puerta'] . "</td>";
			echo "<td>" . $row['Transmision'] . "</td>";
			echo "<td>" . $row['Cilindraje'] . "</td>";
			echo "<td>" . $row['Tcombustible'] . "</td>";
			echo "<td>" . $row['Propietario'] . "</td>";
			echo "<td>" ."<a href='DVehiculo.php?idVehiculo=$row[0]'>Eliminar</a>"."</t>";
			echo "<td>" ."<a href='FUvehiculo.php?idVehiculo=$row[0]&NumSerie=$row[1]&Placa=$row[2]&Motor=$row[3]&Factura=$row[4]&Anio=$row[5]&Color=$row[6]&Modelo=$row[7]&Origen=$row[7]&Tipo=$row[8]&Puerta=$row[9]&Transmision=$row[10]&Cilindraje=$row[11]&Tcombustible=$row[12]&Propietario=$row[13]'>Actualizar</a>"."</t>";
			echo "</tr>";
		}
	echo "</table>";
    
	 /*while($Fila=mysqli_fetch_row($Result)){
	 print($Fila[0]."----".$Fila[1]."----".$Fila[2]."----".$Fila[3]."----".$Fila[4]);
	 }
	 */

	 Cerrar($Con);