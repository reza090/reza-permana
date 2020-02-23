<?php
$sql = "DELETE from tblformula where id_formula ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data formula berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=formula'>";
	} else { 
		echo "<script>alert('Penghapusan data formula tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=formula'>";
	}
?>
