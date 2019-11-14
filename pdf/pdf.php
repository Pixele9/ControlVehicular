<?php
    require('fpdf/fpdf.php');
    // primer parametro es portrait(P) o landscape (L)
    // segundo parámetro es el tamaño
    // $pdf = new FPDF("L", "mm", array(100, 50));
    $pdf = new FPDF('P','mm','A4');
    $image = "foto.jpg";
    // agregar página en blanco
    $pdf->Addpage();

    $pdf->SetFont('Arial','B',16);
    $pdf->SetTextColor(255, 0, 0);
    // $pdf->SetX(40);

    // el cell hará todo para desplazarnos en el pdf
    // primer par indica lo largo
    // segundo par indica el tamaño de la letra
    // tercer par indica el texto
    // 4to es el borde
    // 5to salto de linea
    // 6to alineacion de texto en la celda left right o center
    $pdf->Cell(100, 12, $pdf->Image($image, $pdf->GetX()+40, $pdf->GetY(), 17), 1,1, 'c', false);
    $pdf->Ln();
    // da más espacio para celdas grandes 
    $pdf->MultiCell(100, 12, 'Hola mundo2 sdfdsfgsdfggggdsdfgsdfgsfgsfgsfgsdfgsdfsdfgsdfgsdfgsdfgsdfgsdfgsfgsdfgfgsd', 1, 'l', 0);


    

    $pdf->Output();
?>