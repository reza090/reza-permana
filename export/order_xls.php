<?php 
  
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../inc/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


$query="select * from tblorder_formula";
$hasil = mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Candra Adi Putra")
      ->setLastModifiedBy("Candra Adi Putra")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Laporan transaksi .")
       ->setKeywords("office 2007 openxml php")
       ->setCategory("tblorder_formula");
  
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No')
	   ->setCellValue('B1', 'No Order')
       ->setCellValue('C1', 'No PO')
	   ->setCellValue('D1', 'Item')
	   ->setCellValue('E1', 'Color')
	   ->setCellValue('F1', 'Model')
	   ->setCellValue('G1', 'Size L')
	->setCellValue('H1', 'Size S')
	->setCellValue('I1', 'ER L%')
	->setCellValue('J1', 'ER S%');
	   
	   
$baris = 2;
$no = 0;			
while($row=mysql_fetch_array($hasil)){
$no = $no +1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $row['id_order'])
	 ->setCellValue("B$baris", $row['no_order'])
     ->setCellValue("C$baris", $row['no_po'])
		->setCellValue("D$baris", $row['nama_item'])
		->setCellValue("E$baris", $row['color'])
		->setCellValue("F$baris", $row['model'])
		->setCellValue("G$baris", $row['quantity_l'])
		->setCellValue("H$baris", $row['quantity_s'])
		->setCellValue("I$baris", $row['er_l'])
		->setCellValue("J$baris", $row['er_s']);
	 $baris = $baris + 1;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('transaksi');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="order_formula.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 