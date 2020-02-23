<?php
if(!$_POST['no'] || !$_POST['nopo']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=order_Form'>";		
}else {
	$sql = "INSERT INTO tblorder_formula(no_order,no_po,nama_item,color,model,quantity_l,quantity_s,er_l,er_s) VALUES 
	('$_POST[no]','$_POST[nopo]','$_POST[item]','$_POST[color]','$_POST[model]','$_POST[l]','$_POST[s]','$_POST[erl]','$_POST[ers]')";
	$proses = mysql_query($sql);
	
	$sql1 = "INSERT INTO tblbarang_produksi (id_barangp, item,color,model,size_l,size_s,er_l,er_s)
	VALUES ('','$_POST[item]','$_POST[color]','$_POST[model]',
		'','','$_POST[erl]','$_POST[ers]')"or die('salah_tollol').mysql_error();
		$proses1 = mysql_query($sql1);
		
	if ($proses) {
		echo "<script>alert('Penyimpanan data kelompok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=order'>";
	} else { 
		echo "<script>alert('Penyimpanan data kelompok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=order'>";
	}
}
?>



