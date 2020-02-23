<?php
 $tgl=date('y-m-d');
if(!$_POST['itemtxt'] || !$_POST['colortxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=laporan produksi berhasil_Form'>";		
}else {
	$sql = "INSERT INTO tbllaporan_Produksi (id_laporan, item,color,model,size_l,hasil_l,bs_l,total_l,size_s,hasil_s,bs_s,total_s,tgl_selesai) 
	VALUES ('','$_POST[itemtxt]','$_POST[colortxt]','$_POST[modeltxt]',
		'$_POST[ltxt]','$_POST[hasiltxt]','$_POST[totalbstxt]','$_POST[totaltxt]','$_POST[stxt]','$_POST[hasilstxt]'
		,'$_POST[totalstxt]','$_POST[totalptxt]','$tgl')"or die('salah_tollol').mysql_error();
		
		
	
	$proses = mysql_query($sql);
	if ($proses) {
		
		$sql_update_size_l = "UPDATE tblbarang_produksi set size_l = size_l+$_POST[totaltxt] where item ='$_POST[itemtxt]'";
			$proses_update_size_l= mysql_query($sql_update_size_l);
			
		$sql_update_size_s = "UPDATE tblbarang_produksi set size_s = size_s+$_POST[totalptxt] where item ='$_POST[itemtxt]'";
			$proses_update_size_s = mysql_query($sql_update_size_s);
			
		echo "<script>alert('Penyimpanan laporan produksi berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=laporan_produksi'>";
	} else { 
		echo "<script>alert('Penyimpanan laporan produksi tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=laporan_produksi'>";
	}
}
?>



