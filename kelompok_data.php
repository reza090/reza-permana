<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">
    <td width=1000 height="40"><h3 valign="top" align="center">Kelompok Data </h3>



  
  <tr>
    <td colspan="3" align="left" valign="top">

                        <table class="table table-hover table-condensed table-striped" align="left">
                       <right> <a href="home.php?go=Kelompok_Form" class="btn btn-success">
                                           <i class='glyphicon glyphicon-plus'></i> Add</a>
								<a href="cetak/cetak_kelompok.php" class="btn btn-primary"><i class='glyphicon glyphicon-print'></i> Print</a>
                            <a href="export/kelompok_xls.php" class="btn btn-success"><i class='glyphicon glyphicon-cloud-download'></i> Excel</a>
                            <a href="home.php" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
										   </right>
                                <thead>
                                    <tr>
                                        <th>No</th><th>Kode Kelompok</th><th>Nama Kelompok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
$no=1;
$sql = "select * from tblkelompok order by id desc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
?>
        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['kode_kelompok'] ?>                                     
                                        </td>
                                        <td> <?php echo $record['nama_kelompok']?></td>
                                        <td> <?php echo $record['alamat'] ?></td>
          								<td><a href='?go=Kelompok_Form_Ubah&amp;id=<?php echo $record['id']; ?>'
             class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                                            <a href='?go=Kelompok_Hapus&amp;id=<?php echo $record['id']; ?>
                                            'onclick="return confirm('Yakin data akan dihapus?') ";
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




