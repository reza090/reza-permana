<?php
$tgl=date('y-m-d');
if(!$_POST['nopotxt'] || !$_POST['shift']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=penimbangan_form'>";		
}else {
	$sql = "INSERT INTO tblpenimbangan(id_penimbangan,no_po,item,model,color,size_l,size_s,keterangan,shift,tanggal) VALUES 
	('','$_POST[nopotxt]','$_POST[itemtxt]','$_POST[modeltxt]','$_POST[colortxt]','$_POST[ltxt]','$_POST[stxt]'
	,'$_POST[kettxt]','$_POST[shift]','$tgl')"or die('salah_tollol').mysql_error();
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data kelompok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=penimbangan'>";
	} else { 
		echo "<script>alert('Penyimpanan data kelompok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=penimbangan'>";
	}
}
?>






