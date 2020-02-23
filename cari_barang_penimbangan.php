<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>

<?php
include "koneksi.php";
 
$result=mysql_query("SELECT * FROM tblorder_formula where no_po ='$_POST[kode1]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['nama_item'];
	}
 }else{
    echo "";
 } 
$result=mysql_query("SELECT * FROM tblorder_formula where no_po ='$_POST[kode2]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['color'];
	}
 }else{
    echo "";
 } 
 $result=mysql_query("SELECT * FROM tblorder_formula where no_po ='$_POST[kode3]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['model'];
	}
 }else{
    echo "";
 } 

?>