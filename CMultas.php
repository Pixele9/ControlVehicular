<?php
     $Criterio=$_POST['Criterio'];
	 $Atributo=$_POST['Atributo'];
	 
	 include("Conecta.php");
	 $Con=Conectar();
	 $SQL="SELECT * FROM multa WHERE $Atributo='$Criterio'";
	 $Result=Consultar($Con,$SQL);
	 //Procesamiento de datos
	 $n=mysqli_num_rows($Result);
	 echo "<table border='1'>
	 <tr>
	    <th>IdMulta</th>
	    <th>Motivo</th>
	    <th>Agente</th>
	    <th>Fecha>/th>
	    <th>Lugar</th>
	    <th>Descuento</th>
	    <th>Vehiculo</th>
	    <th>Licencia</th>
	<tr>";
	while($row = mysqli_fetch_array($Result))
		{
			echo "<tr>";
			echo "<td>" . $row['IdMulta'] . "</td>";
			echo "<td>" . $row['Motivo'] . "</td>";
			echo "<td>" . $row['Agente'] . "</td>";
			echo "<td>" . $row['Fecha'] . "</td>";
			echo "<td>" . $row['Lugar'] . "</td>";
			echo "<td>" . $row['Descuento'] . "</td>";
			echo "<td>" . $row['Vehiculo'] . "</td>";
			echo "<td>" . $row['Licencia'] . "</td>";
			echo "<td>" ."<a href='DMulta.php?IdMulta=$row[0]'>Eliminar</a>"."</t>";
			echo "<td>" ."<a href='FUpropietario.php?IdMulta=$row[0]&Motivo=$row[1]&Agente=$row[2]&Fecha=$row[3]&Lugar=$row[4]&Descuento=$row[5]&Vehiculo=$row[6]&Licencia=$row[7]'>Actualizar</a>"."</t>";
			echo "</tr>";
		}
	echo "</table>";

	

	/* for($a=0;$a<$n;$a++){
	 $Fila=mysqli_fetch_row($Result);
	 print($Fila[0]."----".$Fila[1]."----".$Fila[2]."----".$Fila[3]."----".$Fila[4]."----".$Fila[5]."----".$Fila[6]."----".$Fila[7]."<br>");
	 }
	 
	 /*while($Fila=mysqli_fetch_row($Result)){
	 print($Fila[0]."----".$Fila[1]."----".$Fila[2]."----".$Fila[3]."----".$Fila[4]);
	 }
	 */

	 Cerrar($Con);