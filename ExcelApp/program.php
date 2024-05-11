<?php

include 'PHPExcel.php';

$objPHPExcel = new PHPExcel();

$inputFileName='./test.xlsx';
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
//$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load($inputFileName);

/*
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw");

$objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");

$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");

$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");

$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");

$objPHPExcel->getProperties()->setKeywords("office 2007 openxml php");

$objPHPExcel->getProperties()->setCategory("Test result file");

$objPHPExcel->setActiveSheetIndex(0);

$objPHPExcel->getActiveSheet()->setTitle('Simple');

$objPHPExcel->getActiveSheet()->setCellValue('A1', '2007格式');
$objPHPExcel->getActiveSheet()->setCellValue('A2', 12);
$objPHPExcel->getActiveSheet()->setCellValue('A3', true);
$objPHPExcel->getActiveSheet()->setCellValue('C2', 6);

$objPHPExcel->getActiveSheet()->setCellValue('C3', 5);

$objPHPExcel->getActiveSheet()->setCellValue('C5', '=SUM(C2:C4)');
$objPHPExcel->getActiveSheet()->setCellValue('B8', '=MIN(B2:C5)');
*/

//保存excel—2007格式
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
//$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); 
//$objWriter->save("f:\\abcd.xls");
$objWriter->save("./test_new.xlsx");