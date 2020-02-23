 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>Kode Supplier</th><th>Nama Supplier</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tblpemasok ";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['kode_pemasok'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['nama_pemasok']?></td>                    
                                        <td><?php echo $record['alamat'] ?> </td>
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>