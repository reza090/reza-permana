<?php
$sql = "DELETE from tblorder_formula where id_order ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data order berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=order'>";
	} else { 
		echo "<script>alert('Penghapusan data order tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=order'>";
	}
?>
