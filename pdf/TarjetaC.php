<?php
//Inicio Licencia Delantera
    require('fpdf/fpdf.php');
	$pdf = new FPDF('L','mm',array(100,140));
	//Imagenes
	$logo='logo.png';
	$poder='poder.jpg';
	$meme='meme.jpg';
//pagina nueva
	$pdf->Addpage();
	$pdf->SetFont('Arial','','8');
//Leyenda **texto**

	$pdf->SetXY(0, 2);
	$pdf->Cell(20,3,'TIPO DE SERVICIO:',0,'0','L');
	$pdf->SetXY(0,5);
	$pdf->Cell(20,3,'PARTICULAR',0,'0','L');
	$pdf->SetXY(32,2);
	$pdf->Cell(20,3,'HOLOGRAMA',0,'0','L');
	$pdf->SetXY(56,2);
	$pdf->Cell(20,3,'FOLIO',0,'0','L');
	$pdf->SetXY(56,5);
	$pdf->Cell(20,3,'123456789	',0,'0','L');
	$pdf->SetXY(78,2);
	$pdf->Cell(20,3,'VIGENCIA',0,'0','L');
	$pdf->SetXY(78,5);
	$pdf->Cell(20,3,'INDEFINIDA',0,'0','L');
	$pdf->SetXY(102,2);
	$pdf->Cell(20,3,'PLACA',0,'0','L');
	$pdf->SetXY(102,5);
	$pdf->Cell(20,3,'2007/KYC126*',0,'0','L');
	$pdf->SetXY(0,15);
	$pdf->Cell(20,3,'RFC',0,'0','L');
	$pdf->SetXY(0,11);
	$pdf->Cell(20,3,'PROPIETARIO GAELANA RUMBO JONATHAN AKIR',0,'0','L');
	$pdf->SetXY(0,18);
	$pdf->Cell(20,3,'HSYS123291|12',0,'0','L');
	$pdf->SetXY(33,15);
	$pdf->Cell(20,3,'NUMERO DE SERIE',0,'0','L');
	$pdf->SetXY(33,18);
	$pdf->Cell(20,3,'4HDISIDNCSIDNCISN29812',0,'0','L');
	$pdf->SetXY(89,15);
	$pdf->Cell(20,3,'MODELO',0,'0','L');
	$pdf->SetXY(89,18);
	$pdf->Cell(20,3,'2019',0,'0','L');
	$pdf->SetXY(0,22);
	$pdf->Cell(20,3,'LOCALIDAD',0,'0','L');
	$pdf->SetXY(0,25);
	$pdf->Cell(20,3,'SANTIAGO DE',0,'0','L');
	$pdf->SetXY(0,28);
	$pdf->Cell(20,3,'QUERETARO',0,'0','L');
	$pdf->SetXY(33,22);
	$pdf->Cell(20,3,'MARCA/LINEA/SUBLINEA',0,'0','L');
	$pdf->SetXY(33,25);
	$pdf->Cell(20,3,'KIA/FORTE/SX 2.0LTS T/A 6',0,'0','L');
	$pdf->SetXY(33,28);
	$pdf->Cell(20,3,'VEL 4 CILINDROS',0,'0','L');
	$pdf->SetXY(89,22);
	$pdf->Cell(20,3,'OPERACION',0,'0','L');
	$pdf->SetXY(89,25);
	$pdf->Cell(20,3,'2018/82893',0,'0','L');
	$pdf->SetXY(0,31);
	$pdf->Cell(20,3,'MUNICIPIO',0,'0','L');
	$pdf->SetXY(0,34);
	$pdf->Cell(20,3,'QUERETARO',0,'0','L');
	$pdf->SetXY(89,31);
	$pdf->Cell(20,3,'FOLIO',0,'0','L');
	$pdf->SetXY(89,34);
	$pdf->Cell(20,3,'A       21299383',0,'0','L');
	$pdf->SetXY(89,37);
	$pdf->Cell(20,3,'PLACA ANT.',0,'0','L');
	$pdf->SetXY(89,40);
	$pdf->Cell(20,3,'2008/KYC126*',0,'0','L');
	$pdf->SetXY(0,47);
	$pdf->Cell(20,3,'NUMERO DE CONSTACIA',0,'0','L');
	$pdf->SetXY(0,50);
	$pdf->Cell(20,3,'DE INSCRIPCION (NCI)',0,'0','L');
	$pdf->SetXY(0,57);
	$pdf->Cell(20,3,'ORIGEN',0,'0','L');
	$pdf->SetXY(0,60);
	$pdf->Cell(20,3,'NACIONAL',0,'0','L');
	$pdf->SetFont('Arial','','5');
	$pdf->SetXY(0,63);
	$pdf->Cell(20,3,'COLOR',0,'0','L');
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(0,66);
	$pdf->Cell(20,3,'AZURE BLUE',0,'0','L');

	//CAMBIO DE TAMAÑO
	$pdf->SetFont('Arial','','5');
	$pdf->SetXY(40,47);
	$pdf->Cell(20,3,'CILINDRAJE      4',0,'0','L');
	$pdf->SetXY(40,50);
	$pdf->Cell(20,3,'CAPACIDAD      0',0,'0','L');
	$pdf->SetXY(40,53);
	$pdf->Cell(20,3,'PUERTAS          4',0,'0','L');
	$pdf->SetXY(40,56);
	$pdf->Cell(20,3,'ASIENTOS         5',0,'0','L');
	$pdf->SetXY(40,59);
	$pdf->Cell(20,3,'COMBUSTIBLE 1',0,'0','L');
	$pdf->SetXY(40,62);
	$pdf->Cell(20,3,'TRANSMISION',0,'0','L');
	$pdf->SetXY(40,65);
	$pdf->Cell(20,3,'AUTOMATICO',0,'0','L');
    
	$pdf->SetXY(60,47);
	$pdf->Cell(20,3,'CLAVE VEHICULAR',0,'0','L');
	$pdf->SetXY(60,50);
	$pdf->Cell(20,3,'   3092342384902   ',0,'0','L');
	$pdf->SetXY(60,53);
	$pdf->Cell(20,3,'CLASE     1',0,'0','L');
	$pdf->SetXY(60,56);
	$pdf->Cell(20,3,'TIPO        6',0,'0','L');
	$pdf->SetXY(60,59);
	$pdf->Cell(20,3,'USO        36',0,'0','L');
	$pdf->SetXY(60,62);
	$pdf->Cell(20,3,'RFA',0,'0','L');

    $pdf->SetFont('Arial','','5');
	$pdf->SetXY(89,42);
	$pdf->Cell(20,3,'FECHA DE EXPEDICION',0,'0','L');
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(89,45);
	$pdf->Cell(20,3,'24-ENE-2018',0,'0','L');
	$pdf->SetFont('Arial','','5');
	$pdf->SetXY(89,48);
	$pdf->Cell(20,3,'OFICINA EXPEDIDORA',0,'0','L');
	$pdf->SetXY(89,50);
	$pdf->Cell(20,3,'MOVIMIENTO',0,'0','L');
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(89,53);
	$pdf->Cell(20,3,'ALTA DE PLACA',0,'0','L');
	$pdf->SetFont('Arial','','5');
	$pdf->SetXY(89,55);
	$pdf->Cell(20,3,'NUMERO DE MOTOR',0,'0','L');
	$pdf->SetFont('Arial','','8');
	$pdf->SetXY(89,58);
	$pdf->Cell(20,3,'G4DJSDIJ94340394039403',0,'0','L');
	

	



	







$pdf->Output();
?>