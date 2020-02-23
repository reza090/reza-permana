<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">

    
    <td width=1000 height="40"><h3 valign="top" align="center">Data Supplier</h3></td>
  <tr></tr>
    <td colspan="3" align="left" valign="top"></td>

        <table class="table table-hover table-condensed table-striped" width="800">
               <right> <a href="home.php?go=Pemasok_Form" class="btn btn-success">
                       <i class='glyphicon glyphicon-plus'></i> Add</a>
										   <a href="cetak/cetak_pemasok.php" class="btn btn-primary"><i class='glyphicon glyphicon-print'></i> Print</a>
                        <a href="export/pemasok_xls.php" class="btn btn-success"><i class='glyphicon glyphicon-cloud-download'></i> Excel</a>
                        <a href="home.php" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a>
              </right>
              <thead>
                   <tr>
                       <th>No</th><th>Kode Supplier</th><th>Nama Supplier</th><th>Alamat</th>
                       <th>Aksi</th>
                   </tr>
              </thead>
              <tbody>
<?php 
$no=1;                             
$sql = "select * from tblpemasok order by id desc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
?>        
              <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $record['kode_pemasok'] ?></td>
                  <td> <?php echo $record['nama_pemasok']?></td>
									<td> <?php echo $record['alamat']?></td>
          				<td><a href='?go=Pemasok_Form_Ubah&amp;id=<?php echo $record['id']; ?>'
                          class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i>
                        </a>&nbsp
                       <a href='?go=Pemasok_Hapus&amp;id=<?php echo $record['id']; ?> 
                          'onclick="return confirm('Yakin data akan dihapus?') ";
                          class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a>                                         
                  </td>


              <?php $no++;} 
              ?>
              </tr> 
              </tbody>

            </table>
    </div>





