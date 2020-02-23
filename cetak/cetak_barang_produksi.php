
 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>Nama Item</th><th>Color</th><th>Model</th><th>Size L</th>
                                        <th>Size S</th><th>ER L% </th><th>ER S% </th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tblbarang_produksi ";

$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td> <?php echo $record['item']?></td>
                                        <td> <?php echo $record['color']?></td>
                                        <td> <?php echo $record['model']?></td>
                                        <td> <?php echo $record['size_l']?></td>
                                         <td> <?php echo $record['size_s']?></td>
                                          <td> <?php echo $record['']?>%</td>
                                           <td> <?php echo $record['']?>%</td>
                                        
                                        
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>