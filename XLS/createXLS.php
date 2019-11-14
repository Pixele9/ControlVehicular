<?php

require __DIR__.'/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$spreadsheet
-> getProperties()
-> setCreator(" Andres ")
-> setLastModifiedBy(" Pedro ")
-> setTitle(" Practica Excel ")
-> setSubject(" Excel con PHP ")
-> setDescription(" PHP y Excel ")
-> setCategory(" PHP ");

$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World!');

$writer = new Xlsx($spreadsheet);
$writer->save('PracticaExcel.xlsx');

?>