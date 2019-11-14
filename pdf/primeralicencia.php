<?php

   require 'fpdf\fpdf.php';


   ///////////////////////////////////////////////////////////////

   include '..\Conecta.php';
   $Con=conectar();
   $SQL="SELECT L.IdLicencia, C.Nombre, C.FechadeNac, L.FechadExp
   FROM licencia L,conductor C 
   WHERE L.conductor = C.Nombre
   AND L.IdLicencia=8";
   $Resultado=Consultar($Con,$SQL);
   $Fila=mysqli_fetch_row($Resultado);
   ///////////////////////////////////////////////////////////////

   ///////////////////////////////////////////////////////////////
   
   $pdf=new FPDF('P','mm',array(100,140));
   $pdf->AddPage();
   $pdf->SetFont('Arial','B','12');
   $pdf->Cell(10,10,$Fila[1], 1, 1,'R');

   
   $pdf->Output();
?>