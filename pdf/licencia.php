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
    $firma = 'firma.png';
	$qro = 'FEstado.png';
	$Emer = '066.png';
	$Denuncia = '089.png';
	$firma2 = 'firma2.png';
	$leyen = 'leyenda.jpg';
	$Secre = 'secre.jpg';
	// $pdf->Addpage();
	$pdf->SetFont('Arial','','8');


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
    
    // $pdf->SetXY(21, 70);
    $pdf->SetXY(0, 70);
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor(220, 0, 0);
    $pdf->Cell(100, 5, $fila[0], 0, 1,'C');
    // $pdf->Cell(100, 5, 'JLEO93S-16', 0, 1,'r');
    
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
    $pdf->Cell(100, 5, $fila[1], 0, 1,'R');

    $pdf->SetFont('Arial','',5);
    $pdf->SetXY(91, 109);
    $pdf->Cell(100, 5, 'Observaciones', 0, 1,'r');

    // ----- FECHA NACIMIENTO -----
    $pdf->SetFont('Arial','B',10);
    $pdf->SetXY(10, 115);
    $pdf->Cell(100, 5, 'Fecha de Nacimiento', 0, 1,'r');

    $pdf->SetFont('Arial','',9);
    $pdf->SetXY(10, 120);
    $pdf->Cell(100, 5, $fila[2], 0, 1,'r');
    // $pdf->Cell(100, 5, '10/11/1937', 0, 1,'r');
    
    // ------ FECHA EXPEDICION -----
    $pdf->SetFont('Arial','B',10);
    $pdf->SetXY(10, 125);
    $pdf->Cell(100, 5, 'Fecha de Expedicion', 0, 1,'l');

    $pdf->SetFont('Arial','',9);
    $pdf->SetXY(10, 130);
    $pdf->Cell(100, 5, $fila[3], 0, 1,'l');
    // $pdf->Cell(100, 5, '23/05/2016', 0, 1,'l');
    // $pdf->Output();

    // ------ TIPO DE LICENCIA ------
    $pdf->SetFillColor(255, 255, 38);
    $pdf->Rect(10, 140, 15, 15, "DF");
    
    // $pdf->SetFont('Arial','',9);
    // $pdf->SetXY(10, 130);
    // $pdf->Cell(100, 5, 'A', 0, 1,'l');

    //Inicio Licencia Trasera
	//Leyenda
	$pdf->Addpage();
	$pdf->SetFont('Arial','B','14');
	$pdf->SetXY(5, 5);
	$pdf->Cell(10,10,$pdf->Image($Emer,$pdf->GetX(),$pdf->GetY(),10,10),0,0,'C');
	$pdf->SetXY(65, 5);
	$pdf->Cell(30,10,$pdf->Image($Denuncia,$pdf->GetX(),$pdf->GetY(),30,10),0,0,'C');
	$pdf->SetXY(40, 17);
	$pdf->SetFillColor(0,0,0);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(55,7,'B2010787623',0,'0','C',1);
	$pdf->SetFillColor(255,255,255);
	//Datos
	$pdf->SetFont('Arial','B','8');
	$pdf->SetXY(60, 25);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(35,3,'DOMICILIO',0,'0','R',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(50, 30);
	$pdf->MultiCell(45,5,'Priv. Marques de villa del V. Aguila #1049 int 4',0,'R','0');
	$pdf->SetXY(60, 40);
	$pdf->SetFont('Arial','B','8');
	$pdf->Cell(35,3,'CODIGO POSTAL',0,'0','R',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 44);
	$pdf->Cell(35,3,'76146',0,'0','R',1);
	$pdf->SetXY(60, 48);
	$pdf->SetFont('Arial','B','8');
	$pdf->Cell(35,3,'QUERETARO',0,'0','R',1);
	$pdf->SetXY(60, 52);
	$pdf->Cell(35,3,'GRUPO SANGUINEO',0,'0','R',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 56);
	$pdf->Cell(35,3,'ORH-',0,'0','R',1);
	$pdf->SetXY(60, 60);
	$pdf->SetFont('Arial','B','8');
	$pdf->Cell(35,3,'DONADOR DE ORGANOS',0,'0','R',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 64);
	$pdf->Cell(35,3, 'SI',0,'0','R',1);
	$pdf->SetXY(60, 68);
	$pdf->SetFont('Arial','B','8');
	$pdf->Cell(35,3,'NUMERO DE EMERGENCIAS',0,'0','R',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 72);
	$pdf->Cell(35,3,'(044)442-666-0196',0,'0','R',1);
	$pdf->SetXY(60, 76);
	$pdf->Cell(30,20,$pdf->Image($firma2,$pdf->GetX(),$pdf->GetY(),30,20),0,0,'R');
	$pdf->SetXY(60, 98);
	$pdf->SetFont('Arial','B','6');
	$pdf->Cell(35,3, 'CAP. ADOLFO VEGAMONTOTO',0,'0','R',1);
	$pdf->SetFont('Arial','','6');
	$pdf->SetXY(55, 102);
	$pdf->Cell(35,3,'SECRETARIO DE SEGURIDAD CIUDADANA',0,'0','R',1);
	//Parte Derecha
	$pdf->SetXY(5, 48);
	$pdf->SetFont('Arial','B','6');
	$pdf->Cell(35,3, 'RESTRICCIONES',0,'0','L',1);
	$pdf->SetFont('Arial','','6');
	$pdf->SetXY(5, 51);
	$pdf->Cell(35,3,'1 USA LENTES',0,'0','L',1);
	//Inferior
	$pdf->SetXY(5, 103);
	$pdf->SetFont('Arial','B','4');
	$pdf->Cell(35,3, 'FUNDAMENTO LEGAL',0,'0','L',1);
	$pdf->SetFont('Arial','','4');
	$pdf->SetXY(5, 106);
	$pdf->MultiCell(75,2,'Articulos 19 fraccion XIII y 33 fraccion I de la Ley Organica del Poder Ejecutivo
		del Estado de Queretaro, articulo 9 fraccion XII y 56 de la Ley del Transito del Estado de Queretaro.
		Articulo 4 de la Ley de Procedimientos Administrativos del Estado de Queretaro. Articulo 28 del Reglamento de 
		Transito del Estado de Queretaro y articulo 14 fraccion V del Reglamento Interior de la Secretaria de Seguridad 
		Ciudadana',0,'L','0');

    $pdf->Output();
?>