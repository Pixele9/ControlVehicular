<?php
    require('fpdf/fpdf.php');
    include("../conecta.php");

    // ----------------------------------------
    $con = conectar();

    $sql = "SELECT  L.IdLicencia, C.Nombre, C.FechaNacimiento, L.FechaExpedicion 
	FROM Licencias L, Conductores C 
    WHERE L.IdConductor = C.IdConductores
    AND L.IdLicencia = 3";

    $result = consultar($con, $sql);
    $fila = mysqli_fetch_row($result);

    // ----------------------------------------

    $pdf = new FPDF('P', 'mm', array(110, 160));
    $pdf->AddPage();
    $pdf->SetFont('Arial','',9);

    // imágenes
    $escudo = "escudo.jpeg";
    $foto = "48m.png";


    $pdf->Image($escudo, 10, 10, 20, 30, false);
    // $pdf->Color(244, 0,0);
    // $pdf->MultiCell(100,100,'');
    $pdf->SetLeftMargin(45);
    $pdf->Cell(100, 5, 'Estados Unidos Mexicanos', 0, 1,'r');
    $pdf->Cell(100, 5, 'Poder Ejecutivo del Estado de Queretaro', 0, 1,'r');
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(100, 8, 'Secretaria de Seguridad Ciudadana', 0, 1,'r');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(100, 2, 'Licencia para conducir', 0, 1,'r');

    $pdf->Image($foto, 60, 40, 45, 50, false);
    $pdf->SetFont('Arial','',6);
    $pdf->SetXY(35, 65);
    $pdf->Cell(100, 5, 'No. de Licencia', 0, 1,'r');
    
    $pdf->SetXY(21, 70);
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor(220, 0, 0);
    $pdf->Cell(100, 5, 'JLEO93S-16', 0, 1,'r');
    
    $pdf->SetXY(29, 75);
    $pdf->SetFont('Arial','B',7);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100, 5, 'AUTOMOVILISTA', 0, 1,'r');

    $pdf->SetXY(95, 90);
    $pdf->SetFont('Arial','B',6);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100, 5, 'Nombre', 0, 1,'r');
    
    $pdf->SetXY(92, 95);
    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100, 5, 'PEREZ', 0, 1,'r');

    $pdf->SetFont('Arial','',10);
    $pdf->SetXY(88, 100);
    $pdf->Cell(100, 5, 'RAMIREZ', 0, 1,'r');
    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetXY(0, 105);
    $pdf->Cell(100, 5, $fila[1], 1, 1,'R');

    $pdf->SetFont('Arial','',5);
    $pdf->SetXY(91, 109);
    $pdf->Cell(100, 5, 'Observaciones', 0, 1,'r');

    // ----- FECHA NACIMIENTO -----
    $pdf->SetFont('Arial','',10);
    $pdf->SetXY(10, 115);
    $pdf->Cell(100, 5, 'Fecha de Nacimiento', 0, 1,'r');

    $pdf->SetFont('Arial','',9);
    $pdf->SetXY(10, 120);
    $pdf->Cell(100, 5, '10/11/1937', 0, 1,'r');
    
    // ------ FECHA EXPEDICION -----
    $pdf->SetFont('Arial','',10);
    $pdf->SetXY(10, 125);
    $pdf->Cell(100, 5, 'Fecha de Expedicion', 0, 1,'l');

    $pdf->SetFont('Arial','',9);
    $pdf->SetXY(10, 130);
    $pdf->Cell(100, 5, '23/05/2016', 0, 1,'l');
    $pdf->Output();

    // ------ TIPO DE LICENCIA ------
    $pdf->Rect(10, 140, 30, 30, "DF");
    // $pdf->SetFont('Arial','',9);
    // $pdf->SetXY(10, 130);
    // $pdf->Cell(100, 5, 'A', 0, 1,'l');

    $pdf->Output();
?>



<!-- <?php
    require('fpdf/fpdf.php');
    include("../conecta.php");

    // ----------------------------------------
    $con = conectar();

    $sql = "SELECT  L.IdLicencia, C.Nombre, C.FechaNacimiento, L.FechaExpedicion 
	FROM Licencias L, Conductores C 
    WHERE L.IdConductor = C.IdConductores
    AND L.IdLicencia = 3";

    $result = consultar($con, $sql);
    $fila = mysqli_fetch_row($result);

    // ----------------------------------------

    $pdf = new FPDF('P', 'mm', array(100, 140));
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10, 10, $fila[1], 0, 1, 'R');

    $pdf->Output();
?> -->