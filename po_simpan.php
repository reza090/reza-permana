<?php
if(isset($_POST['tambahbtn'])){
	if(!$_POST['kdbarangtxt'] || !$_POST['jmltxt']){
		echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pembelian_Form'>";		
	}else {
		$sql = "INSERT INTO tbltransaksi_po_rinci(no_po,kode_barang,berat_perkilo,harga_perkilo,jumlah,sub_total) VALUES ('$_POST[nopotxt]','$_POST[kdbarangtxt]','$_POST[berattxt]','$_POST[hrgtxt]','$_POST[jmltxt]','$_POST[subtotaltxt]')";
	$proses = mysql_query($sql);
		if ($proses) {		
			
			$sql_update_stok = "UPDATE tblbarang set stock = stock+$_POST[jmltxt] where kode_barang ='$_POST[kdbarangtxt]'";
			$proses_update_stok = mysql_query($sql_update_stok);
			
			echo "<meta http-equiv='refresh' content='0;home.php?go=po_form'>";
			
		} else { 
			echo "<script>alert('Penyimpanan data pembelian tidak berhasil !')</script>";
			echo "<meta http-equiv='refresh' content='0;home.php?go=po_data'>";
		}	
	}
}else{
	if(!$_POST['pemasoklst']){
		echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pembelian_Form'>";		
	}else {
	
		$sql = "select * from tbltransaksi_po_rinci where no_po ='$_POST[nopotxt]'";
		$proses = mysql_query($sql);
		$record = mysql_num_rows($proses);
		if ($record>=1){
				
			$sql_total = "select sum(sub_total) as gtotal from tbltransaksi_po_rinci where no_po ='$_POST[nopotxt]'";
			$proses_total = mysql_query($sql_total);
			$record_total= mysql_fetch_assoc($proses_total);
			
			$tgl = substr($_POST['tgl'],6,4)."-".substr($_POST['tgl'],3,2)."-". substr($_POST['tgl'],0,2); 		
	
			$sql1 = "INSERT INTO tbltransaksi_po(no_po,tanggal,kode_pemasok,total) VALUES ('$_POST[nopotxt]','$tgl','$_POST[pemasoklst]','$record_total[gtotal]')";
			$proses1 = mysql_query($sql1);
			if ($proses1) {
				echo "<script>alert('Penyimpanan data pembelian berhasil !')</script>";
				echo "<meta http-equiv='refresh' content='0;home.php?go=po_data'>";
			} else { 
				echo "<script>alert('Penyimpanan data pembelian tidak berhasil !')</script>";
				echo "<meta http-equiv='refresh' content='0;home.php?go=po_form'>";
			}
		}else{
				echo "<script>alert('Belum ada transaksi pembelian rinci !')</script>";
				echo "<meta http-equiv='refresh' content='0;home.php?go=Pembelian_Form'>";
		}
	}	
}
?>