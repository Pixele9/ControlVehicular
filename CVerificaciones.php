<?php
     $Criterio=$_POST['Criterio'];
	 $Atributo=$_POST['Atributo'];
	 include("Conecta.php");
	 $Con=Conectar();
	 $SQL="SELECT * FROM verificacion WHERE $Atributo='$Criterio'";
	 $Result=Consultar($Con,$SQL);
	 //Procesamiento de datos
	 $n=mysqli_num_rows($Result);
	  echo "<table border='1'>
	  <tr>
		<th>Folio</th>
		<th>Tipo</th>
		<th>Vigencia</th>
		<th>Dictamen</th>
		<th>Vehiculo</th>
		</tr>";
	 while($row = mysqli_fetch_array($Result))
		{
			echo "<tr>";
			echo "<td>" . $row['Folio'] . "</td>";
			echo "<td>" . $row['Tipo'] . "</td>";
			echo "<td>" . $row['Vigencia'] . "</td>";
			echo "<td>" . $row['Dictamen'] . "</td>";
			echo "<td>" . $row['Vehiculo'] . "</td>";
			echo "<td>" ."<a href='DVerificacion.php?Folio=$row[0]'>Eliminar</a>"."</t>";
			echo "<td>"."<a href='FUverificacion.php?Folio=$row[0]&Tipo=$row[1]&Vigencia=$row[2]&Dictamen=$row[3]&Vehiculo=$row[4]'>Actualizar</a>"."</t>";
			echo "</tr>";
		}
	echo "</table>";
    cerrar($con);
    /*while($Fila=mysqli_fetch_row($Result)){
	 print($Fila[0]."----".$Fila[1]."----".$Fila[2]."----".$Fila[3]."----".$Fila[4]);
	 }
	 */

?>
	 