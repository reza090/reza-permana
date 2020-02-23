<?php
if(!$_POST['nopotxt'] || !$_POST['notxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=laporan_hasil_produksi_Form'>";		
}else {
	$sql = "INSERT INTO tbllaporan_hasil_produksi(id_hasillap,no_po,no_order,nama_item,color,model,quantiity_l,quantiity_s,er_l,er_s,batch1l,erl1,batch2l,erl2,batch1s,ers1,batch2s,
	ers2) VALUES 
	('','$_POST[nopotxt]','$_POST[notxt]','$_POST[itemtxt]','$_POST[colortxt]','$_POST[modeltxt]','$_POST[ltxt]','$_POST[stxt]','$_POST[erltxt]','$_POST[erstxt]','$_POST[b1txt]','$_POST[erl1txt]','$_POST[b2txt]','$_POST[erl2txt]','$_POST[bs1txt]','$_POST[ers1txt]','$_POST[bs2txt]','$_POST[ers2txt]')"or die('salah_tollol').mysql_error();
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data kelompok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=laporan_hasil_produksi'>";
	} else { 
		echo "<script>alert('Penyimpanan data kelompok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=laporan_hasil_produksi'>";
	}
}
?>



