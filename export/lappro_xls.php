<?php 
  
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../inc/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


$query="select * from tbllaporan_produksi";
$hasil = mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Candra Adi Putra")
      ->setLastModifiedBy("Candra Adi Putra")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Laporan transaksi .")
       ->setKeywords("office 2007 openxml php")
       ->setCategory("tbllaporan_produksi");
  
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No')
	   ->setCellValue('B1', 'Item')
	   ->setCellValue('C1', 'Color')
	   ->setCellValue('D1', 'Model')
       ->setCellValue('E1', 'Size l')
	   ->setCellValue('F1', 'Hasil l')
	   ->setCellValue('G1', 'BS L')
	->setCellValue('H1', 'Total L')
	->setCellValue('I1', 'Size S')
	   ->setCellValue('J1', 'Hasil S')
	   ->setCellValue('K1', 'BS S')
	   ->setCellValue('L1', 'Total S')
	->setCellValue('M1', 'Tanggal Selesai');
	   
	   
$baris = 2;
$no = 0;			
while($row=mysql_fetch_array($hasil)){
$no = $no +1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", '$no')
     ->setCellValue("B$baris", $row['item'])
     ->setCellValue("C$baris", $row['color'])
		->setCellValue("D$baris", $row['model'])
		->setCellValue("E$baris", $row['size_l'])
		->setCellValue("F$baris", $row['hasil_l'])
		->setCellValue("G$baris", $row['bs_l'])
		->setCellValue("H$baris", $row['total_l'])
		->setCellValue("I$baris", $row['size_s'])
		->setCellValue("J$baris", $row['hasil_s'])
		->setCellValue("K$baris", $row['bs_s'])
		->setCellValue("L$baris", $row['total_s'])
		->setCellValue("M$baris", $row['tgl_selesai']);
	 $baris = $baris + 1;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('transaksi');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="lapkerja.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 