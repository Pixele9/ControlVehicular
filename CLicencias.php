<?php
	include("conecta.php");

     $Criterio=$_POST['Criterio'];
	 $Atributo=$_POST['Atributo'];
	 
	 $Con=conectar();
	 $SQL="SELECT * FROM Licencias WHERE $Atributo='$Criterio'";
	 $Result=consultar($Con,$SQL);
	 //Procesamiento de datos
	 $n=mysqli_num_rows($Result);
	  echo "<table border='1'>
	 <tr>
	    <th>IdLicencia</th>
	    <th>Restriccion</th>
	    <th>FechaExp</th>
	    <th>Antiguedad</th>
	    <th>Vigencia</th>
	    <th>IdConductor</th>
	    <th>LugarExp</th>
	   
	<tr>";
	while($row = mysqli_fetch_array($Result))
		{
			echo "<tr>";
			echo "<td>" . $row['IdLicencia'] . "</td>";
			echo "<td>" . $row['Restriccion'] . "</td>";
			echo "<td>" . $row['FechaExpedicion'] . "</td>";
			echo "<td>" . $row['Antiguedad'] . "</td>";
			echo "<td>" . $row['Vigencia'] . "</td>";
			echo "<td>" . $row['IdConductor'] . "</td>";
			echo "<td>" . $row['LugarExpedicion'] . "</td>";
			echo "<td>" ."<a href='DLicencias.php?IdLicencia=$row[0]'>Eliminar</a>"."</t>";
			// echo "<td>" ."<a href='FULicencias.php?IdLicencia=$row[0]&Restricion=$row[1]&FechaExpedicion=$row[2]&Antiguedad=$row[3]&Vigencia=$row[4]&IdConductor=$row[5]&LugarExpedicion=$row[6]'>Actualizar</a>"."</t>";
			echo "<td>" ."<a href='FULicencias.php?IdLicencia=$row[0]&FechaExpedicion=$row[1]&Antiguedad=$row[2]&Vigencia=$row[3]&LugarExpedicion=$row[4]&Restriccion=$row[5]&IdConductor=$row[6]'>Actualizar</a>"."</t>";
			echo "<td>" ."<a href='GLicenciaPDF.php?idlicencia=$row[0]'>Generar PDF</a>"."</td>";
			echo "<td>" ."<a href='GLicenciaXML.php?idlicencia=$row[0]'>Generar XML</a>"."</td>";
			echo "</tr>";
		}
	echo "</table>";

	 /*for($a=0;$a<$n;$a++){
	 $Fila=mysqli_fetch_row($Result);
	 print($Fila[0]."----".$Fila[1]."----".$Fila[2]."----".$Fila[3]."----".$Fila[4]."----".$Fila[5]."----".$Fila[6]."<br>");
	 }
	 
	 /*while($Fila=mysqli_fetch_row($Result)){
	 print($Fila[0]."----".$Fila[1]."----".$Fila[2]."----".$Fila[3]."----".$Fila[4]);
	 }
	 */

	cerrar($Con);