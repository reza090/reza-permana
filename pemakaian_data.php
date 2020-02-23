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
    <td width=1000 height="40"><h3 valign="top" align="center">Pemakaian Barang Tangker</h3>
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


                        <table class="table table-hover table-condensed table-striped">
                       <right> <a href="home.php?go=pemakaian_form" class="btn btn-success">
                                           <i class='glyphicon glyphicon-plus'></i> Add</a>
										   <a href="cetak/cetak_pemakaiaan_barang.php" class="btn btn-primary"><i class='glyphicon glyphicon-print'></i> Print</a>
                            <a href="export/pemakaian_barang_xls.php" class="btn btn-success"><i class='glyphicon glyphicon-cloud-download'></i> Excel</a>
                            <a href="home.php" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
                                <thead>
                                    <tr>
                                        <th>No</th><th>No Pengambilan</th><th>Tanggal</th>
                                        <th>Total</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
 <?php
$no=1;
$sql = "select * from tbltransaksi_pemakaian order by id desc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
$tgl = substr($record['tanggal'],8,2)."-".substr($record['tanggal'],5,2)."-". substr($record['tanggal'],0,4); 		
?>
        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['no_pemakaian'] ?>  
                                        </td>
                                        <td> <?php echo $tgl ?></td>
                                     
                                        
                                        <td>Rp.<?php echo number_format($record['total'], 0, ',','.') ?></td>
          								<td><a href=''
             class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                                            <a href=''onclick="return confirm('Yakin data akan dihapus?') ";
                 class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a>                                         
                                        </td>


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
    </div>
</div>

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






