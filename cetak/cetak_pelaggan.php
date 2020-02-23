 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>Kode Costumer</th><th>Nama Costumer</th>
                                        <th>Nama Perusahaan</th><th>Email</th><th>No. Telepon</th><th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tblpelanggan ";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['kode_pelanggan'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['nama_pelanggan']?></td>
                                        <td> <?php echo $record['nama_perusahaan']?></td>
                                        <td> <?php echo $record['email']?></td>
                                        <td><?php	echo $record['telepon'];?></td>
                       
                                        <td><?php echo $record['alamat'] ?> </td>
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>