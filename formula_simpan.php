<?php
if(!$_POST['noordertxt'] || !$_POST['nopotxt']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;home.php?go=formula_Form'>";		
}else {
	$sql = "INSERT INTO tblformula(id_formula,no_order,no_po,item,color,model,quantity_l,quantity_s,size_l,size_s,eva1,quantity,eva3,quantity1,eva5,quantity2,
	eva2,quantity3,blow1,quantityb1,blow2,quantityb2,blow3,quantityb3,pigment1,quantityp1,pigment2,quantityp2,pigment3,quantityp3,
	er_l,er_s) VALUES 
	('','$_POST[noordertxt]','$_POST[nopotxt]','$_POST[itemtxt]','$_POST[colortxt]','$_POST[modeltxt]','$_POST[ltxt]','$_POST[stxt]','$_POST[sizeltxt]','$_POST[sizestxt]'
	,'$_POST[barang1]','$_POST[qty]','$_POST[barang2]','$_POST[qty1]','$_POST[barang3]','$_POST[qty2]','$_POST[barang4]','$_POST[qty3]',
	'$_POST[blow1]','$_POST[blowing1]','$_POST[blow2]','$_POST[blowing2]','$_POST[blow3]','$_POST[blowing3]','$_POST[pig1]','$_POST[pigment1]','$_POST[pig2]','$_POST[pigment2]','$_POST[pig3]','$_POST[pigment3]','$_POST[erl]','$_POST[ers]')"or die('salah_tollol').mysql_error();
	$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penyimpanan data kelompok berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=formula'>";
	} else { 
		echo "<script>alert('Penyimpanan data kelompok tidak berhasil !')</script>";
		echo "<meta http-equiv='refresh' content='0;home.php?go=formula'>";
	}
}
?>



