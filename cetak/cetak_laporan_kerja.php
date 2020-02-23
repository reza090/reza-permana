
 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>Item</th><th>Color</th><th>Model</th><th>Size L</th><th>Hasil L</th><th>BS L</th>
                                        <th>Total L</th><th>Size S</th><th>Hasil S</th><th>BS S</th><th>Total S</th><th>Tanggal Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tbllaporan_produksi ";

$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td>
                                         <?php echo $record['item'] ?>                                        
                                        </td>
                                        <td>
                                         <?php echo $record['color'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['model']?></td>
                                        <td> <?php echo $record['size_l']?>BACTH</td>
                                        <td> <?php echo $record['hasil_l']?>KG</td>
                                        <td> <?php echo $record['bs_l']?>KG</td>
                                        <td> <?php echo $record['total_l']?>KG</td>
                                         <td> <?php echo $record['size_s']?>BACTH</td>
                                        <td> <?php echo $record['hasil_s']?>KG</td>
                                        <td> <?php echo $record['bs_s']?>KG</td>
                                        <td> <?php echo $record['total_s']?>KG</td>
                                        <td> <?php echo $record['tgl_selesai']?></td>
                                        
                                        
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>