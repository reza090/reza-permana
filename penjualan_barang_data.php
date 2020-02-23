<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">

    <td width=1000 height="40"><h3 valign="top" align="center">Penjualan Barang Produksi</h3>
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
                       <right> <a href="home.php?go=penjualan_barang_form" class="btn btn-success">
                                           <i class='glyphicon glyphicon-plus'></i> Add</a>
										   <a href="cetak/cetak_penjualan_barang.php" class="btn btn-primary"><i class='glyphicon glyphicon-print'></i> Print</a>
                            <a href="export/penjualn_barang_xls.php" class="btn btn-success"><i class='glyphicon glyphicon-cloud-download'></i> Excel</a>
                            <a href="home.php" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
							</right>
                                <thead>
                                    <tr>
                                        <th>No</th><th>No Faktur</th><th>Tanggal</th>
                                        <th>Kode Pelanggan</th><th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
$no=1;
$sql = "select * from tblpenjualan_barang order by id_penjualan asc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
?>
        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['no_faktur'] ?>                                     
                                        </td>
                                        <td> <?php echo $record['tanggal']?></td>
                                        <td> <?php echo $record['kode_pelanggan'] ?></td>
                                         <td><?php echo $record['total'] ?></td>
          								
                                       <td> <a href='?go=penjualan_barang_form_rinci&amp;id_penjualan=<?php echo $record['no_faktur']; ?>'
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
