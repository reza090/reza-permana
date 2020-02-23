<?php
	include "koneksi.php";
	
	$nopotxt = $_POST['nopotxt'];
	$nofakturtxt = $_POST['nofakturtxt'];
	$nosjtxt = $_POST['nosjtxt'];
	$itemtxt = $_POST['itemtxt'];
	$colortxt = $_POST['colortxt'];
	$modeltxt = $_POST['modeltxt'];
	$pemasoklst = $_POST['pemasoklst'];
    $tgl=date('y-m-d');
	$erltxt = $_POST['erltxt'];
	$erstxt = $_POST['erstxt'];
	$ltxt = $_POST['ltxt'];
	$stxt = $_POST['stxt'];
	$hargastxt = $_POST['hargastxt'];
$subtotal=$_POST['totalltxt']+ $_POST['totalstxt'];

$simpan=mysql_query("INSERT INTO tblpenjualan_barang () VALUES 
	('','$nofakturtxt','$tgl','$pemasoklst','$subtotal')")or die ('salah_tollol').mysql_error();	
		
if ($simpan)
	{
		$simpan1=mysql_query("INSERT INTO tblpenjualan_barang_rinci (no_faktur,no_surat_jalan,no_po,item,color,model,er_l,er_s,
		kode_pelanggan,tanggal,quantity_L,quantity_s,harga_perkilo,sub_total) VALUES 
	('$nofakturtxt','$nosjtxt','$nopotxt','$itemtxt','$colortxt','$modeltxt','$erltxt','$erstxt','$pemasoklst','$tgl','$ltxt','$stxt','$hargastxt','$subtotal')")
	or die ('salah_tollol').mysql_error();

	$sql_update_size_l = "UPDATE tblbarang_produksi set size_l = size_l-$_POST[ltxt] where item ='$_POST[itemtxt]'";
			$proses_update_size_l= mysql_query($sql_update_size_l);
			
		$sql_update_size_s = "UPDATE tblbarang_produksi set size_s = size_s-$_POST[stxt] where item ='$_POST[itemtxt]'";
			$proses_update_size_s = mysql_query($sql_update_size_s);
?>
		<script language="JavaScript">alert('Terima kasih');
			location='home.php?go=penjualan_barang'
		</script>
<?php
	}
else
	{
?>
		<script language="JavaScript">alert('Error!!! Coba diulang kembali');
			location='home.php?go=penjualan_barang_form'
		</script>
<?php
	}
?>




