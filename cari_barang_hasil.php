<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>

<?php
include "koneksi.php";
$result=mysql_query("SELECT * FROM tblformula where no_po='$_POST[kode]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['no_order'];
	}
 }else{
    echo "";
 } 

$result=mysql_query("SELECT * FROM tblformula where no_po ='$_POST[kode2]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['item'];
	}
 }else{
    echo "";
 } 
 $result=mysql_query("SELECT * FROM tblformula where no_po ='$_POST[kode3]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['color'];
	}
 }else{
    echo "";
 } 
$result=mysql_query("SELECT * FROM tblformula where no_po ='$_POST[kode4]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['model'];
	}
 }else{
    echo "";
 } 
$result=mysql_query("SELECT * FROM tblformula where no_po ='$_POST[kode5]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['quantity_l'];
	}
 }else{
    echo "";
 } 
 $result=mysql_query("SELECT * FROM tblformula where no_po ='$_POST[kode6]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['quantity_s'];
	}
 }else{
    echo "";
 }
 $result=mysql_query("SELECT * FROM tblformula where no_po ='$_POST[kode7]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['er_l'];
	}
 }else{
    echo "";
 }  
 $result=mysql_query("SELECT * FROM tblformula where no_po ='$_POST[kode8]'");
$found=mysql_num_rows($result);
 
if($found>0){
    $row=mysql_fetch_array($result);{
	echo $row['er_s'];
	}
 }else{
    echo "";
 }  
?>