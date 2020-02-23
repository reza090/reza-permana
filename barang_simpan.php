<?php
if(!$_POST['kdbarangtxt'] || !$_POST['nmbarangtxt'] || !$_POST['kelompoklst'] 
|| !$_POST['hrgtxt'] || !$_POST['raktxt'] || !$_POST['fototxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Barang_Form'>";		
}else {
	$sql = "INSERT INTO tblbarang(kode_barang,nama_barang,kode_kelompok,rak,harga_beli,stock,foto) VALUES ('$_POST[kdbarangtxt]','$_POST[nmbarangtxt]','$_POST[kelompoklst]','$_POST[raktxt]','$_POST[hrgtxt]','0','$_POST[fototxt]')";
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data barang berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	} else { 
		echo "<script>alert('Penyimpanan data barang tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	}
}
?>