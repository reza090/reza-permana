<?php
$sql = "DELETE from tbllaporan_produksi where Id_laporan ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data laporan berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=laporan_produksi'>";
	} else { 
		echo "<script>alert('Penghapusan data laporan tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=laporan_produksi'>";
	}
?>
