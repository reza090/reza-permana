<?php
$srvr="localhost"; //SESUAIKAN DENGAN WEBSERVER ANDA
$db="inventori_ssi"; //SESUAIKAN DENGAN WEBSERVER ANDA
$usr="root"; //SESUAIKAN DENGAN WEBSERVER ANDA
$pwd="";//SESUAIKAN DENGAN WEBSERVER ANDA

mysql_connect($srvr,$usr,$pwd);
mysql_select_db($db);

//fungsi format rupiah 
function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
}
?>