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
    <td width=1000 height="40"><h3 valign="top" align="center">Tambah Data Formula</h3>
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
<a href="home.php?go=formula" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a>
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
	
	function cari_barang_formula(){
		var kode=$("#noordertxt").val();
			if(kode!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode="+kode,
					success:function(data){
					$("#nopotxt").val(data)
					}
				});
			}
			
		var kode1=$("#noordertxt").val();
			if(kode1!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode1="+kode1,
					success:function(data){
					$("#itemtxt").val(data)
					}
				});
			} 
		var kode2=$("#noordertxt").val();
			if(kode2!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode2="+kode2,
					success:function(data){
					$("#colortxt").val(data)
					}
				});
			} 
		var kode3=$("#noordertxt").val();
			if(kode3!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode3="+kode3,
					success:function(data){
					$("#modeltxt").val(data)
					}
				});
			} 
							      
		var kode4=$("#noordertxt").val();
			if(kode4!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode4="+kode4,
					success:function(data){
					$("#ltxt").val(data)
					}
				});
			}
			var kode5=$("#noordertxt").val();
			if(kode5!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode5="+kode5,
					success:function(data){
					$("#stxt").val(data)
					}
				});
			} 
		  var kode6=$("#noordertxt").val();
			if(kode6!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode6="+kode6,
					success:function(data){
					$("#erl").val(data)
					}
				});
			}	
			var kode7=$("#noordertxt").val();
			if(kode7!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_formula.php",
					data:"kode7="+kode7,
					success:function(data){
					$("#ers").val(data)
					}
				});
			}
	} 
	
	$('#noordertxt').change(function() {
		cari_barang_formula();
		$("#stxt").focus()	
    });		
		
})		
</script>


<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="home.php?go=formula_simpan">
<table width="700" border="0" height="600" >
  <tr>
    <td>No Order</td>
    <td><input name="noordertxt" class="form-control required" type="text" id="noordertxt" size="5" maxlength="15" /></td>
  </tr>
  <tr>
    <td>nopo</td>
    <td><input name="nopotxt" class="form-control required" type="text" id="nopotxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  <tr>
    <td>Item</td>
    <td><input name="itemtxt" class="form-control required" type="text" id="itemtxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Color</td>
    <td><input name="colortxt" class="form-control required" type="text" id="colortxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input name="modeltxt" class="form-control required" type="text" id="modeltxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Quantity L</td>
    <td><input name="ltxt" class="form-control required" type="text" id="ltxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Quantity S</td>
    <td><input name="stxt" class="form-control required" type="text" id="stxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Size L</td>
    <td><input name="sizeltxt" class="form-control required" type="text" id="ltxt" size="5" maxlength="15"  /></td>
    </td>
  </tr>
  <tr>
    <td>Size S</td>
    <td><input name="sizestxt" class="form-control required" type="text" id="stxt" size="5" maxlength="15"  /></td>
    </td>
  </tr>
  <tr>
    <td>ETHYLENE</td>
    <td></td>
    </td>
  </tr>
  <tr>
    <td><label for="barang1"></label>
        <select name="barang1"  id="barang1" >
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="qty" class="form-control required" id="qty" type="text"></td>
  </tr>
  <tr>
    <td><label for="barang2"></label>
        <select name="barang2"  id="barang2">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="qty1" class="form-control required" id="qty1" type="text"></td>
  </tr>
  <tr>
    <td><label for="barang3"></label>
        <select name="barang3"  id="barang3">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="qty2" class="form-control required" id="qty2" type="text"></td>
  </tr>
   <tr>
    <td><label for="barang4"></label>
        <select name="barang4"  id="barang4">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="qty3" class="form-control required" id="qty3" type="text"></td>
  </tr>
  <tr>
    <td>BLOWING AGENT</td>
    <td></td>
  </tr>
  <tr>
    <td><label for="blow1"></label>
        <select name="blow1"  id="blow1">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="blowing1" class="form-control required" id="blowing1" type="text"></td>
  </tr>
  <tr>
    <td><label for="blow2"></label>
        <select name="blow2"  id="blow2">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="blowing2" class="form-control required" id="blowing2" type="text"></td>
  </tr>
  <tr>
    <td><label for="blow3"></label>
        <select name="blow3"  id="blow3">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="blowing3" class="form-control required" id="blowing3" type="text"></td>
  </tr>
  <tr>
    <td>PIGMENT</td>
    <td></td>
  </tr>
  <tr>
    <td><label for="pig1"></label>
        <select name="pig1"  id="pig1">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="pigment1" class="form-control required" id="pigment1" type="text"></td>
  </tr>
  <tr>
    <td><label for="pig2"></label>
        <select name="pig2"  id="pig2">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="pigment2" class="form-control required" id="pigment2" type="text"></td>
  </tr>
  <tr>
    <td><label for="pig3"></label>
        <select name="pig3"  id="pig3">
        <option value="" selected="selected"></option>        
       <?php
  		$sql2="select * from tblbarang order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[nama_barang]"; ?>"><?php echo "$record2[nama_barang]"; }?></option>        
      </select></td>
    <td><input name="pigment3" class="form-control required" id="pigment3" type="text"></td>
  </tr>
  <tr>
    <td>ER L</td>
    <td><input name="erl" class="form-control required" id="erl" type="text"></td>
  </tr>
  <tr>
    <td>ER S</td>
    <td><input name="ers" class="form-control required" id="ers" type="text"></td>
  </tr>
  
  <tr>
    <td></td>
    <td><input name="simpan" class="btn btn-primary" type="submit" value="simpan"></td>
  </tr>
</table>

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
