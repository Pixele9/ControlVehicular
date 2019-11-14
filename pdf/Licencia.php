<?php

//Datos y retomar de la BD
	/**/
	include '..\Conecta.php';
	$Con = Conectar();
	$SQL = "SELECT L.IdLicencia, C.Nombre, C.FechadeNac, L.FechadExp 
			FROM Licencia L, Conductor C
			WHERE L.Conductor = C.IdConductor
			AND L.IdLicencia = 123";
	$Result = Consultar($Con,$SQL);
	$Fila = mysqli_fetch_row($Result);
	//Nombre 
	$FilaN = explode(" ",$Fila[1]);

//Inicio Licencia Delantera
	require 'FPDF\fpdf.php';
	$pdf = new FPDF('P','mm',array(100,140));
	//Imagenes
	$autos='autos.jpg';
	$escudo = 'escudo.png';
	$foto = 'foto.jpg';
	$firma = 'firma.png';
	$qro = 'FEstado.png';
	$Emer = '066.png';
	$Denuncia = '089.png';
	$firma2 = 'firma2.png';
	$leyen = 'leyenda.jpg';
	$Secre = 'secre.jpg';
//pagina nueva
	$pdf->Addpage();
	$pdf->SetFont('Arial','','8');
//Encabezado
	//Escudo
	$pdf->SetXY(5, 5);
	$pdf->Cell(15,15,$pdf->Image($escudo,$pdf->GetX(),$pdf->GetY(),15),0,0,'C');
	//Leyenda
	$pdf->SetXY(20, 5);
	$pdf->SetFillColor(255,0,0);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(75,3,'Estados Unidos Mexicanos',0,'0','L',1);
	$pdf->SetXY(20, 8);
	$pdf->SetFillColor(255,0,0);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(75,3,'Poder Ejecutivo  del Estado de Queretaro',0,'0','L',1);
	$pdf->SetXY(20, 11);
	$pdf->SetFillColor(255,0,0);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(75,3,'Secretaria de Seguridad Ciudadana',0,'0','L',1);
	$pdf->SetXY(20, 14);
	$pdf->SetFillColor(255,0,0);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetFont('Arial','B','10');
	$pdf->Cell(75,5,'Licencia para Conducir',0,'0','L',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(20, 19);
	$pdf->SetFillColor(0,0,0);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(75,3,'',0,'0','L',1);
//Lado Izquierdo Licencia
	//Tipo Licencia
	$pdf->SetXY(80, 5);
	$pdf->SetFont('Arial','B','25');
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFillColor(255,255,0);
	$pdf->Cell(15,10,'A',0,0,'C',1);
	//Foto infantil
	$pdf->SetXY(5, 25);
	$pdf->Cell(40,45,$pdf->Image($foto,$pdf->GetX(),$pdf->GetY(),40,45),0,0,'C');
	//Nombre Completo
	$pdf->SetFont('Arial','','16');
	$pdf->SetXY(5, 75);
	$pdf->SetFillColor(255,255,255);
	$pdf->Cell(30,3,'Rumbo',0,'0','L',1);
	$pdf->SetXY(5, 83);
	$pdf->Cell(30,3,'Galeana',0,'0','L',1);
	$pdf->SetXY(5, 91);
	$pdf->SetFont('Arial','B','16');
	$pdf->Cell(30,3,'Jonathan Akir',0,'0','L',1);
	//Observaciones
	$pdf->SetFont('Arial','B','8');
	$pdf->SetXY(5, 99);
	$pdf->Cell(30,3,'Observaciones',0,'0','L',1);
//Lado Derecho Licencia
	//No. Licencia
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 22);
	$pdf->SetFillColor(155,155,155);
	$pdf->Cell(35,3,'No. de Licencia',0,'0','L',1);
	$pdf->SetFont('Arial','','12');
	$pdf->SetXY(60, 25);
	$pdf->SetFillColor(255,255,255);
	$pdf->SetTextColor(255,0,0);
	$pdf->Cell(35,5,'Q152043-13',0,'0','L',1);
	//Datos
	$pdf->SetFont('Arial','B','8');
	$pdf->SetXY(60, 32);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(35,3,'AUTOMOVILISTA',0,'0','C',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 37);
	$pdf->Cell(35,3,'Fecha de Nacimiento',0,'0','C',1);
	$pdf->SetXY(60, 41);
	$pdf->SetFont('Arial','','12');
	$pdf->Cell(35,3,'11/11/1995',0,'0','C',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 46);
	$pdf->Cell(35,3,'Fecha Expedicion',0,'0','C',1);
	$pdf->SetXY(60, 49);
	$pdf->SetFont('Arial','','12');
	$pdf->Cell(35,3,'10/04/2015',0,'0','C',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 54);
	$pdf->Cell(35,3,'Valida Hasta',0,'0','C',1);
	$pdf->SetXY(60, 57);
	$pdf->SetFont('Arial','','12');
	$pdf->Cell(35,3,'10/04/2020',0,'0','C',1);
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(60, 62);
	$pdf->Cell(35,3,'Antiguedad',0,'0','C',1);
	$pdf->SetXY(60, 65);
	$pdf->SetFont('Arial','','12');
	$pdf->Cell(35,3,'1',0,'0','R',1);
	//firma
	$pdf->SetXY(60, 75);
	$pdf->SetFont('Arial','','8');
	$pdf->Cell(35,3,'Firma',0,'0','R',1);
	$pdf->SetXY(60, 78);
	$pdf->Cell(20,30,$pdf->Image($firma,$pdf->GetX(),$pdf->GetY(),20,30),0,0,'C');
	//Estado
	$pdf->SetXY(60, 100);
	$pdf->Cell(20,18,$pdf->Image($qro,$pdf->GetX(),$pdf->GetY(),20,18),0,0,'C');
//Fin Licencia Delantera
//Inicio Licencia Trasera
	//Leyenda
	$pdf->Addpage();
	$pdf->SetFont('Arial','B','14');
	$pdf->SetXY(5, 35);
	$pdf->Cell(30,10,$pdf->Image($autos,$pdf->GetX(),$pdf->GetY(),40,10),0,0,'C');
	$pdf->SetXY(5, 5);
	$pdf->Cell(10,10,$pdf->Image($Emer,$pdf->GetX(),$pdf->GetY(),10,10),0,0,'C');
	$pdf->SetXY(65, 5);
	$pdf->Cell(30,10,$pdf->Image($Denuncia,$pdf->GetX(),$pdf->GetY(),30,10),0,0,'C');
	$pdf->SetXY(40, 17);
	$pdf->SetFillColor(0,0,0);
	$pdf->SetTextColor(255,255,255);
	$pdf->SetXY(20, 5);
	$pdf->Cell(40,7,'B2010787623',0,'1','C',1);
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
	$pdf->Cell(35,3,'SI',0,'0','R',1);
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
	$pdf->SetXY(5, 118);
	$pdf->Cell(1,1,$pdf->Image($Secre,$pdf->GetX(),$pdf->GetY(),20),0,0,'C');
	$pdf->SetXY(30, 118);
	$pdf->Cell(1,1,$pdf->Image($leyen,$pdf->GetX(),$pdf->GetY(),60),0,0,'C');
	//Fin
	$pdf->Output();
?>