<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>

<?php
include "koneksi.php";

$result=mysql_query("SELECT * FROM tblformula where item ='$_POST[kode2]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['color'];
	}
 }else{
    echo "";
 } 
 $result=mysql_query("SELECT * FROM tblformula where item ='$_POST[kode3]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['model'];
	}
 }else{
    echo "";
 } 
$result=mysql_query("SELECT * FROM tblformula where item ='$_POST[kode4]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['size_l'];
	}
 }else{
    echo "";
 } 
$result=mysql_query("SELECT * FROM tblformula where item ='$_POST[kode5]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['size_s'];
	}
 }else{
    echo "";
 } 
?>