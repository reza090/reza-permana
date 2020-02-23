<?php
if(!$_POST['kdtxt'] || !$_POST['nmtxt'] || !$_POST['almtxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=Pemasok'>";		
}else{
$sql = "UPDATE tblpelanggan set nama_pelanggan = '$_POST[nmtxt]',nama_perusahaan = '$_POST[nmpertxt]',email = '$_POST[emailtxt]',telepon = '$_POST[tlpntxt]',alamat = '$_POST[almtxt]' where kode_pelanggan = '$_POST[kdtxt]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Pengubahan data pemasok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pelanggan'>";
	} else { 
		echo "<script>alert('Pengubahan data pemasok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pelanggan'>";
	}
}
?>