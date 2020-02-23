<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">

    <td width=1000 height="40"><h3 valign="top" align="center"><b>Pemakaian Barang</b></h3>
    </td>

 
  <tr>
    <td colspan="3" align="left" valign="top">                       
         <table class="table table-hover table-condensed table-striped">
          <right> <a href="home.php?go=Penjualan_Form" class="btn btn-success">
                    <i class='glyphicon glyphicon-plus'></i> Add</a>
									<a href="cetak/cetak_pengambilan_barang.php" class="btn btn-primary"><i class='glyphicon glyphicon-print'></i> Print</a>
                  <a href="export/pengambilan_barang_xls.php" class="btn btn-success"><i class='glyphicon glyphicon-cloud-download'></i> Excel</a>
                  <a href="home.php" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
                </table>
              </td>
            </tr>
            <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th><th>No Pengambilan</th><th>Tanggal</th>
                                        <th>Total</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
 <?php
$no=1;
$sql = "select * from tbltransaksi_jual order by id desc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
$tgl = substr($record['tanggal'],8,2)."-".substr($record['tanggal'],5,2)."-". substr($record['tanggal'],0,4); 		
?>
        
                                  <tr>
                                      <td><?php echo $no ?></td>
                                      <td><?php echo $record['no_faktur'] ?></td>
                                      <td><?php echo $tgl ?></td>                                                                 
                                      <td>Rp.<?php echo number_format($record['total'], 0, ',','.') ?></td>
          								            <td><a href='?go=Penjualan_Form_Rinci&amp;id=<?php echo $record['no_faktur']; ?>'
                                              class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                                          <a href='?go=Penjualan_Hapus&amp;id=<?php echo $record['no_faktur']; ?>
                                            'onclick="return confirm('Yakin data akan dihapus?') ";
                                            class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a></td>


                                  <?php $no++;} 
                                  ?>
                                  </tr> 
                                  </tbody>

                            </table>
    
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



