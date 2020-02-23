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
    <td width=1000 height="40"><h3 valign="top" align="center">Ubah Data Costumer</h3>
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
<a href="home.php?go=Pelanggan" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
<SCRIPT language=Javascript>
//Membuat validasi hanya untuk input angka menggunakan kode javascript
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>

<?php
$sql = "select * from tblpelanggan order by id_pelanggan desc";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$kode = $record['id_pelanggan']+1;
?>
<form  id='form1' method="POST" 
                      action='home.php?go=Pelanggan_Ubah'
                      class="form-horizontal" role="form">
                     
					 
					 
	<table width="600" border="0" height="400">
  <tr>
    <td>Kode Costumer</td>
    <td><input type="text" class="form-control required" id="kdtxt" name='kdtxt'
        value=" <?php echo $record['kode_pelanggan']?>" readonly maxlength="50"></td>
  </tr>
  <tr>
    <td>Nama Costumer</td>
    <td><input type="text" class="form-control required" id="nmtxt" name='nmtxt'
       placeholder="Masukan nama Costumer" maxlength="50" value=" <?php echo $record['nama_pelanggan']?>"></td>
  </tr>
  <tr>
    <td>Nama Perusahaan</td>
    <td><input type="text" class="form-control required" id="nmperktxt" name='nmpertxt'
       placeholder="Masukan nama perusahaan" maxlength="50" value=" <?php echo $record['nama_perusahaan']?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" class="form-control required" id="emailtxt" name='emailtxt'
       placeholder="Masukan Email" maxlength="50" value=" <?php echo $record['email']?>"></td>
  </tr>
  <tr>
    <td>Telepon</td>
    <td> <input type="text" class="form-control required" id="tlpntxt" name='tlpntxt'
       placeholder="Masukan nomer Telepon" maxlength="50" value=" <?php echo $record['telepon']?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="almtxt" class="form-control required" id="almtxt"><?php echo $record['alamat'] ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="btn btn-primary" name='submit' value="Simpan" /></td>
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


  
      
      