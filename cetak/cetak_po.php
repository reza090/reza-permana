
 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>No Purchase Order</th><th>Tanggal</th><th>Supplier</th><th>Total</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tbltransaksi_po ";

$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['no_po'] ?>                                        
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