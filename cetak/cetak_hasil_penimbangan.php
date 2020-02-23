 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>Item </th><th>Color</th><th>Model</th><th>Size l</th><th>Size s</th><th>Shift</th>
										<th>Keterangan</th><th>Tanggal</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tblpenimbangan ";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['item'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['color']?></td>
										<td> <?php echo $record['model']?></td>
                                        <td> <?php echo $record['size_l']?></td>
										<td> <?php echo $record['size_s']?></td>
										<td> <?php echo $record['shift']?></td>
										<td> <?php echo $record['keterangan']?></td>
										<td> <?php echo $record['tanggal']?></td>
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>