<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$table_name = "tblpelanggan";
$backup_file  = "toko/tblpelanggan.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
 
mysql_select_db('inventori_ssi');
$backup = mysql_query( $sql, $koneksi );
if(! $backup )
{
  die('Gagal Backup: ' . mysql_error());
}
echo "Backup Berhasil\n";
mysql_close($koneksi );
?>