
 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>No Order</th><th>No Purchase Order</th><th>Nama Item</th><th>Color</th><th>Model</th><th>Quantity L</th>
                                        <th>Quantity S</th><th>ER L </th><th>ER S </th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tblorder_formula ";

$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td>
                                         <?php echo $record['no_order'] ?>                                        
                                        </td>
                                        <td>
                                         <?php echo $record['no_po'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['nama_item']?></td>
                                        <td> <?php echo $record['color']?></td>
                                        <td> <?php echo $record['model']?></td>
                                        <td> <?php echo $record['quantity_l']?></td>
                                         <td> <?php echo $record['quantity_s']?></td>
                                          <td> <?php echo $record['er_l']?></td>
                                           <td> <?php echo $record['er_l']?></td>
                                        
                                        
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>