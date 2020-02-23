<?php

error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../inc/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


$query="select * from tblbarang";
$hasil = mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Candra Adi Putra")
      ->setLastModifiedBy("Candra Adi Putra")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Laporan transaksi .")
       ->setKeywords("office 2007 openxml php")
       ->setCategory("tblbarang");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'id_barang')
       ->setCellValue('B1', 'Kode Barang')
       ->setCellValue('C1', 'Nama Barang')
       ->setCellValue('D1', 'Kelompok Barang')
	   ->setCellValue('E1', 'Rak')
	   ->setCellValue('F1', 'Harga Satuan')
	   ->setCellValue('G1', 'Stok');
 
$baris = 2;
$no = 0;	
if ($hasil === FALSE) {
    die(mysql_error());
}

while($row=mysql_fetch_array($hasil)){
$no = $no +1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $row['id'])
     ->setCellValue("B$baris", $row['kode_barang'])
     ->setCellValue("C$baris", $row['nama_barang'])
     ->setCellValue("D$baris", $row['kode_kelompok'])
     ->setCellValue("E$baris", $row['rak'])
	 ->setCellValue("F$baris", $row['harga_beli'])
	 ->setCellValue("F$baris", $row['stock']);
$baris = $baris + 1;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('transaksi');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="databarang.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 