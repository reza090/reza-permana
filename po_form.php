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
    <td width=1000 height="40"><h3 valign="top" align="center">Buat PO</h3>
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
	
                            <a href="home.php?go=po_data" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a>

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

function subtotal(jmltxt){
var hitung = (document.getElementById('hrgtxt').value * document.getElementById('jmltxt').value);
	document.forms.form1.subtotaltxt.value = hitung;
}

</script>

<script src="JQuery/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
	$("#tgl").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});		
	
	function cari_barang_po(){
		var kode=$("#kdbarangtxt").val();
			if(kode!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_po.php",
					data:"kode="+kode,
					success:function(data){
					$("#nmbarangtxt").val(data)
					}
				});
			}
			
		var kode1=$("#kdbarangtxt").val();
			if(kode1!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_po.php",
					data:"kode1="+kode1,
					success:function(data){
					$("#hrgtxt").val(data)
					}
				});
			} 
		
		var kode2=$("#kdbarangtxt").val();
			if(kode2!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_po.php",
					data:"kode2="+kode2,
					success:function(data){
					$("#berattxt").val(data)
					}
				});
			} 
						                                   
	} 
	
	$('#kdbarangtxt').change(function() {
		cari_barang_po();
		$("#jmltxt").focus()	
    });		
		
})		
</script>

<?php
$sql = "select * from tbltransaksi_po order by id desc";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$kode = $record['id']+1;
$tgl = Date("my");
?>

<form id="form1" name="form1" method="post" action="home.php?go=po_simpan">
  <table width="900" border="0" >
    <tr>
      <td width="14%" align="left" valign="middle">Kode Barang</td>
      <td width="1%" align="left" valign="middle">:</td>
      <td width="49%" align="left" valign="top"><input name="kdbarangtxt" type="text" id="kdbarangtxt" size="10" maxlength="50" /></td>
      <td width="11%" align="left" valign="middle">No PO</td>
      <td width="1%" align="left" valign="middle">:</td>
      <td width="24%" align="left" valign="top"><input name="nopotxt" type="text" id="nopotxt" value="<?php echo "POSSI-$tgl-$kode"?>" size="7" maxlength="50" readonly /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Nama Barang</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmbarangtxt" type="text" id="nmbarangtxt" size="35" maxlength="50" readonly /></td>
      <td align="left" valign="middle">Tanggal</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="tgl" type="text" id="tgl" value="<?php echo date('d-m-Y') ?>" 
      size="6" maxlength="10" readonly /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Harga perkilo</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="hrgtxt" type="text" id="hrgtxt" size="5" maxlength="15" readonly /></td>
      <td align="left" valign="middle">Supplier</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><select name="pemasoklst" id="pemasoklst">
        <option value="" selected="selected"></option>
        <?php
  		$sql2="select * from tblpemasok order by id asc";
  		$proses2=mysql_query($sql2);
  		while ($record2 = mysql_fetch_array($proses2))
 		{
  		?>
        <option value="<?php echo "$record2[kode_pemasok]"; ?>"><?php echo "$record2[kode_pemasok], $record2[nama_pemasok]"; }?></option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="middle">berat perkilo</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="berattxt" type="text" id="berattxt" size="5" maxlength="15" readonly /></td>
     </tr>
    <tr>
      <td align="left" valign="middle">Jumlah</td>
      <td align="left" valign="middle">:</td>
      <td colspan="4" align="left" valign="top"><input name="jmltxt" type="text" id="jmltxt" size="5" maxlength="15" onkeyup="subtotal(this.value,getElementById('jmltxt').value);" onkeypress="return isNumberKey(event)" /></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Sub Total</td>
      <td align="left" valign="middle">:</td>
      <td colspan="4" align="left" valign="top"><input name="subtotaltxt" type="text" id="subtotaltxt" size="5" maxlength="15" readonly/></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="4" align="left" valign="top"><input type="submit" class="btn btn-primary" name="tambahbtn" id="tambahbtn" value="Tambah" />
      <input type="submit" class="btn btn-danger" name="prosesbtn" id="prosesbtn" value=" Proses " /></td>
    </tr>
    <tr>
      <td colspan="6" align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td colspan="6" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="4">
        <tr>
          <th width="5%" bgcolor="#CCCCCC" scope="col">No</th>
          <th width="15%" align="left" bgcolor="#CCCCCC" scope="col">Kode Barang</th>
          <th width="43%" align="left" bgcolor="#CCCCCC" scope="col">Nama Barang</th>
          <th width="16%" align="right" bgcolor="#CCCCCC" scope="col">Harga Perkilo</th>
          <th width="8%" align="center" bgcolor="#CCCCCC" scope="col">Jumlah</th>
          <th width="13%" align="right" bgcolor="#CCCCCC" scope="col">Sub Total</th>
        </tr>
        
<?php
$no=1;
$nopo ="POSSI-$tgl-$kode";
$sql1 = "select * from tbltransaksi_po_rinci inner join tblbarang on tbltransaksi_po_rinci.kode_barang = tblbarang.kode_barang where tbltransaksi_po_rinci.no_po ='$nopo'";
$proses1 = mysql_query($sql1);
while ($record1 = mysql_fetch_array($proses1))
{
?>   
     
     	<tr>
    	<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
    	<td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record1['kode_barang'] ?></td>
    	<td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record1['nama_barang']?></td>
    	<td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record1['harga_perkilo'], 0, ',','.') ?></td>
    	<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $record1['jumlah']?></td>
    	<td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record1['sub_total'], 0, ',','.') ?></td> 
        </tr>
        
<?php $no++;}?> 

<?php
$sql_total = "select sum(sub_total) as gtotal from tbltransaksi_po_rinci where tbltransaksi_po_rinci.no_po ='$nopo'";
$proses_total = mysql_query($sql_total);
$record_total= mysql_fetch_assoc($proses_total);
?>  
   
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <th colspan="2" align="right">Grand Total :</th>
          <td align="right" bgcolor="#FFFF00"><font color="#FF0000"><b><?php echo number_format($record_total['gtotal'], 0, ',','.') ?></b></font></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="4" align="left" valign="top"></td>
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


