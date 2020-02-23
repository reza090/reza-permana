<?php
if(!$_POST['kdtxt'] || !$_POST['nmtxt'] || !$_POST['almtxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=pelanggan_Form'>";		
}else {
	$sql = "INSERT INTO tblpelanggan(kode_pelanggan,nama_pelanggan,nama_perusahaan,email,telepon,alamat) 
	VALUES ('$_POST[kdtxt]','$_POST[nmtxt]','$_POST[nmpertxt]','$_POST[emailtxt]','$_POST[tlpntxt]','$_POST[almtxt]')";
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data pelanggan berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pelanggan'>";
	} else { 
		echo "<script>alert('Penyimpanan data pelanggan tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=Pelanggan'>";
	}
}
?>