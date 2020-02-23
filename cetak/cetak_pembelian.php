
 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>No Faktur</th><th>Tanggal</th><th>Pemasok</th><th>Total</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tbltransaksi_beli ";

$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['no_faktur'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['tanggal']?></td>
                                        <td> <?php echo $record['kode_pemasok']?></td>
                                        <td> Rp.<?php echo number_format($record['total'], 0, ',','.') ?></td>
                                        
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>