<?php include "menubar.php" ;?>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<table width="1394" border="0" align="left">
  <tr>
    <td rowspan="2" valign="top" width="192"><ul id="MenuBar1" class="MenuBarVertical">
     
      <li><font color="#0000FF"><a href="" class="btn btn-info">
                                           </i> Barang</a></font></li> 
     
	<li><a href="home.php?go=Barang"><i class='glyphicon glyphicon-file'></i> Data Barang</a></li>
    <li><a href="home.php?go=Pemasok"><i class='glyphicon glyphicon-file'></i> Data Supplier</a></li>
    <li><a href="home.php?go=Pelanggan"><i class='glyphicon glyphicon-file'></i> Data Costumer</a></li>
    <li><a href="home.php?go=Kelompok"><i class='glyphicon glyphicon-file'></i> Data Kelompok</a></li>
    <li><a href="home.php?go=Pembelian"><i class='glyphicon glyphicon-registration-mark'></i> Pembelian Barang</a></li>
    <li><a href="home.php?go=po_data"><i class='glyphicon glyphicon-paperclip'></i> Buat PO</a></li> 
    <li><a href="" class="btn btn-info">
                                           </i> Produksi</a></li>     
       <li><a href="home.php?go=order"><i class='glyphicon glyphicon-sort-by-order-alt'></i> Order Formula</a></li>
        <li><a href="home.php?go=formula"><i class='glyphicon glyphicon-list-alt'></i> Data Formula</a></li>
         <li><a href="home.php?go=laporan_produksi"><i class='glyphicon glyphicon-book'></i> Laporan Kerja</a></li>
          <li><a href="home.php?go=laporan_hasil_produksi"><i class='glyphicon glyphicon-book'></i> Laporan Produksi</a></li>
           <li><a href="home.php?go=penjualan_barang"><i class='glyphicon glyphicon-road'></i> Pengiriman Barang</a></li>
            <li><a href="home.php?go=barang_produksi"><i class='glyphicon glyphicon-file'></i> Data Barang Produksi</a></li>
             <li><a href="" class="btn btn-info">
                                           </i> Penimbangan</a></li>
              <li><a href="home.php?go=penimbangan"><i class='glyphicon glyphicon-record'></i> Hasil Penimbangan</a></li>
               <li><a href="home.php?go=Penjualan"><i class='glyphicon glyphicon-import'></i> Pengambilan Barang</a></li>
                <li><a href="" class="btn btn-info">
                                           </i> Gudang</a></li>
                 <li><a href="home.php?go=pengisian"> <i class='glyphicon glyphicon-registration-mark'></i> Pengisian Tangker</a></li>
                  <li><a href="home.php?go=pemakaian"><i class='glyphicon glyphicon-stats'></i> Pemakaian Barang</a></li>
                   <li><a href="" class="btn btn-info">
                                           </i> Laporan</a></li>
                    <li><a href="home.php?go=laporan_pemakaian_form"><i class='glyphicon glyphicon-info-sign'></i> Laopran Pemakaian</a></li>
                    <li><a href="home.php?go=Laporan_Penjualan_Form"><i class='glyphicon glyphicon-info-sign'></i> Laopran Penjualan</a></li>
                    <li><a href="home.php?go=Laporan_Pembelian_Form"><i class='glyphicon glyphicon-info-sign'></i> Laopran Pembelian</a></li>
    </ul></td>
    <td width=1000 height="40"><h3 valign="top" align="center">Tambah Laporan Barang Produksi</h3>
<div class='col-md-8 col-md-offset-2'>
    <td width=80 align="right">Brian  
    <td width=200 align="left"> <ul id="MenuBar2" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="#"> <img src="Gambar/10509505_876698219025252_7956996687464690214_n.jpg" height="40" width="40" /> </a>
        <ul>
		<li><a href="home.php?go=Pengguna"><i class='glyphicon glyphicon-user'></i> Pengguna</a></li>
          <li><a href="#"><i class='glyphicon glyphicon-log-out'></i> Log out</a></li>
          
          
    </ul></td>



  </tr>
  <tr>
    <td colspan="3" align="left" valign="top">
<a href="home.php?go=laporan_hasil_produksi" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a>
<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

<SCRIPT language=Javascript>

function isNumberKey(evt)
//Membuat validasi hanya untuk input angka menggunakan kode javascript
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}




</script>

<script src="JQuery/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
	$("#tgl").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});		
	
	function cari_barang_hasil(){ 
		var kode=$("#nopotxt").val();
			if(kode!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode="+kode,
					success:function(data){
					$("#notxt").val(data)
					}
				});
			} 
		
		var kode2=$("#nopotxt").val();
			if(kode2!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode2="+kode2,
					success:function(data){
					$("#itemtxt").val(data)
					}
				});
			} 
		var kode3=$("#nopotxt").val();
			if(kode3!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode3="+kode3,
					success:function(data){
					$("#colortxt").val(data)
					}
				});
			} 
							      
		var kode4=$("#nopotxt").val();
			if(kode4!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode4="+kode4,
					success:function(data){
					$("#modeltxt").val(data)
					}
				});
			}
			var kode5=$("#nopotxt").val();
			if(kode5!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode5="+kode5,
					success:function(data){
					$("#ltxt").val(data)
					}
				});
			} 
			var kode6=$("#nopotxt").val();
			if(kode6!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode6="+kode6,
					success:function(data){
					$("#stxt").val(data)
					}
				});
			} 
			var kode7=$("#nopotxt").val();
			if(kode7!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode7="+kode7,
					success:function(data){
					$("#erltxt").val(data)
					}
				});
			} 
			var kode8=$("#nopotxt").val();
			if(kode8!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_hasil.php",
					data:"kode8="+kode8,
					success:function(data){
					$("#erstxt").val(data)
					}
				});
			} 
	
		  				                               
	} 
	
	$('#nopotxt').change(function() {
		cari_barang_hasil();
		$("#b1txt").focus()	
    });		
		
})		
</script>


<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="home.php?go=laporan_hasil_produksi_simpan">
<table width="600" border="0" height="400">
  <tr>
    <td>No Po</td>
    <td><input name="nopotxt" class="form-control required" type="text" id="nopotxt" size="5" maxlength="15" /></td>
    </td>
  </tr>
  <tr>
    <td>No Order</td>
    <td><input name="notxt" class="form-control required" type="text" id="notxt" size="5" maxlength="15" /></td>
    </td>
  </tr>
  <tr>
    <td>Item</td>
    <td><input name="itemtxt" class="form-control required" type="text" id="itemtxt" size="5" maxlength="15" /></td>
    </td>
  </tr>
  <tr>
    <td>Color</td>
    <td><input name="colortxt" class="form-control required" type="text" id="colortxt" size="5" maxlength="15"  /></td>
    </td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input name="modeltxt" class="form-control required" type="text" id="modeltxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Quantity L</td>
    <td><input name="ltxt" type="text" class="form-control required" id="ltxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr
  ><tr>
    <td>Quantity S</td>
    <td><input name="stxt" type="text" class="form-control required" id="stxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>ER L%</td>
    <td><input name="erltxt" type="text" class="form-control required" id="erltxt" size="5" maxlength="15"  /></td>
    </td>
  </tr>
  <tr>
    <td>ER S%</td>
    <td><input name="erstxt" type="text" class="form-control required" id="erstxt" size="5" maxlength="15"  /></td>
    </td>
  </tr>
 
</table>
</br></br>
<table width="600" border="1">
  <tr>
    <td>No</td>
    <td>Batch</td>
    <td>ER L%</td>
    
  </tr>
  <tr>
    <td>1</td>
    <td><input name="b1txt" class="form-control required" type="text" id="b1txt" size="5" maxlength="15"  /></td>
    <td><input name="erl1txt" class="form-control required" type="text" id="erl1txt" size="5" maxlength="15"  /></td>
    
  </tr>
  <tr>
    <td>2</td>
    <td><input name="b2txt" class="form-control required" type="text" id="b2txt" size="5" maxlength="15"  /></td>
    <td><input name="erl2txt" class="form-control required" type="text" id="erl2txt" size="5" maxlength="15"  /></td>
    
  </tr>
  <tr>
    <td>No</td>
    <td>Batch</td>
    <td>ER S%</td>
    
  </tr>
  <tr>
    <td>1</td>
    <td><input name="bs1txt" class="form-control required" type="text" id="bs1txt" size="5" maxlength="15"  /></td>
    <td><input name="ers1txt" class="form-control required" type="text" id="ers1txt" size="5" maxlength="15"  /></td>
    
  </tr>
  <tr>
    <td>2</td>
    <td><input name="bs2txt" class="form-control required" type="text" id="bs2txt" size="5" maxlength="15"  /></td>
    <td><input name="ers2txt" class="form-control required" type="text" id="ers2txt" size="5" maxlength="15"  /></td>
    
  </tr>
</table></br><center>
<input name="simpan" class="btn btn-primary" type="submit" value="simpan"></center>
</form>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
