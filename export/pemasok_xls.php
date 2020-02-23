<?php 
  
error_reporting(E_ALL);

require_once '../plugins/excel/PHPExcel.php';
require_once '../inc/config.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();


$query="select * from tblpemasok";
$hasil = mysql_query($query);
 
// Set properties
$objPHPExcel->getProperties()->setCreator("Candra Adi Putra")
      ->setLastModifiedBy("Candra Adi Putra")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Laporan transaksi .")
       ->setKeywords("office 2007 openxml php")
       ->setCategory("tblpemasok");
  
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       ->setCellValue('A1', 'No')
       ->setCellValue('B1', 'Kode Supplier')
       ->setCellValue('C1', 'Nama Supplier')
	   ->setCellValue('D1', 'Nama Perusahaan')
	   ->setCellValue('E1', 'Email')
	   ->setCellValue('F1', 'No.Telepon')
	   ->setCellValue('G1', 'Alamat');

	   
$baris = 2;
$no = 0;			
while($row=mysql_fetch_array($hasil)){
$no = $no +1;
$objPHPExcel->setActiveSheetIndex(0)
     ->setCellValue("A$baris", $row['id'])
     ->setCellValue("B$baris", $row['kode_pemasok'])
     ->setCellValue("C$baris", $row['nama_pemasok'])
	 ->setCellValue("D$baris", $row['nama_perusahaan'])
	 ->setCellValue("E$baris", $row['email'])
	 ->setCellValue("F$baris", $row['telepon'])
	 ->setCellValue("G$baris", $row['alamat']);
$baris = $baris + 1;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('transaksi');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="pemasok.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>
 