<?php
if(!$_POST['kdbarangtxt'] || !$_POST['nmbarangtxt'] || !$_POST['kelompoklst'] || !$_POST['raktxt'] || !$_POST['hrgtxt'] ){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Barang_ubah'>";		

}else {
	$sql = "UPDATE tblbarang set nama_barang = '$_POST[nmbarangtxt]', kode_kelompok='$_POST[kelompoklst]',rak = '$_POST[raktxt]',harga_beli = '$_POST[hrgtxt]' where kode_barang = '$_POST[kdbarangtxt]'";
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Pengubahan data barang berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	} else { 
		echo "<script>alert('Pengubahan data barang tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	}
}
?>