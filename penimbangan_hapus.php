<?php
$sql = "DELETE from tblpenimbangan where id_penimbangan ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data penimbangan berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=penimbamgan'>";
	} else { 
		echo "<script>alert('Penghapusan data penimbangan tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=penimbangan'>";
	}
?>
