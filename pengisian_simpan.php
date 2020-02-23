

<?php
	include "koneksi.php";
	
	$eva1 = $_POST['eva1'];
	$eva2 = $_POST['eva2'];
	$eva3 = $_POST['eva3'];
	$eva4 = $_POST['eva4'];
	$eva5 = $_POST['eva5'];
	$shift = $_POST['shift'];
	$tgl=date('y-m-d');
	
	

	$simpan=mysql_query("INSERT INTO tblpengisian () VALUES 
	('','$eva1','$eva2','$eva3','$eva4','$eva5','$shift','$tgl')");
	
if ($simpan)
	{
?>
		<script language="JavaScript">alert('Terima kasih');
			location='home.php?go=pengisian'
		</script>
<?php
	}
else
	{
?>
		<script language="JavaScript">alert('Error!!! Coba diulang kembali');
			location='home.php?go=pengisian'
		</script>
<?php
	}
?>




