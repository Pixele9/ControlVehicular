<?php
     $Criterio=$_POST['Criterio'];
	 $Atributo=$_POST['Atributo'];
	 
	 include("Conecta.php");
	 $Con=Conectar();
	 $SQL="SELECT * FROM tenencia WHERE $Atributo='$Criterio'";
	 $Result=Consultar($Con,$SQL);
	 //Procesamiento de datos
	 $n=mysqli_num_rows($Result);
	 echo "<table border='1'>
	  <tr>
		<th>IdTenencia</th>
		<th>Monto</th>
		<th>Anio</th>
		<th>Descuento</th>
		<th>Vehiculo</th>
		</tr>";
	  while($row = mysqli_fetch_array($Result))
		{
			echo "<tr>";
			echo "<td>" . $row['IdTenencia'] . "</td>";
			echo "<td>" . $row['Monto'] . "</td>";
			echo "<td>" . $row['Anio'] . "</td>";
			echo "<td>" . $row['Descuento'] . "</td>";
			echo "<td>" . $row['Vehiculo'] . "</td>";
			echo "<td>" ."<a href='DTenencia.php?IdTenencia=$row[0]'>Eliminar</a>"."</t>";
			echo "<td>" ."<a href='FUtenencia.php?Criterio=$row[0]&Monto=$row[1]&Anio=$row[2]&Descuento=$row[3]&Vehiculo=$row[4]'>Actualizar</a>"."</t>";
			echo "</tr>";
		}
	echo "</table>";
	 
	 /*while($Fila=mysqli_fetch_row($Result)){
	 print($Fila[0]."----".$Fila[1]."----".$Fila[2]."----".$Fila[3]."----".$Fila[4]);
	 }
	 */

	 Cerrar($Con);