<?php
	
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','inventori_ssi');
	
	@mysql_connect(db_host,db_user,db_pass);
	@mysql_select_db(inventori_ssi);
	
	
//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>
