
 <?php include "../koneksi.php" ?>
 <table class="table table-hover table-condensed table-striped" width="800" border="1">
                       <right>   <thead>
                                    <tr>
                                        <th>No</th><th>No Order</th><th>No PO</th><th>Item</th><th>Color</th><th>Model</th><th>Quantity L</th><th>Quantity S</th>
                                        <th>ER L%</th>
                                        <th>ER S%</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tbllaporan_hasil_produksi ";

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
                                        <td>
                                         <?php echo $record['item'] ?>                                        
                                        </td>
                                        <td>
                                         <?php echo $record['color'] ?>                                        
                                        </td>
                                        <td> <?php echo $record['model']?></td>
                                        <td> <?php echo $record['quantiity_l']?>BACTH</td>
                                        <td> <?php echo $record['quantiity_s']?>KG</td>
                                        <td> <?php echo $record['er_l']?>KG</td>
                                        <td> <?php echo $record['er_s']?>KG</td>
                                         
                                         <table width="600" border="1">
  <tr>
    <td>No </td>
    <td>Batch</td>
    <td>ER L%</td>
  </tr>
  <tr>
    <td>1</td>
    <td><?php echo $record['batch1l']?></td>
    <td><?php echo $record['erl1']?>%</td>
  </tr>
  <tr>
    <td>2</td>
    <td><?php echo $record['batchl']?></td>
    <td><?php echo $record['erl2']?>%</td>
  </tr>
  <tr>
    <td>No</td>
    <td>Batch</td>
    <td>ER S%</td>
  </tr>
  <tr>
    <td>1</td>
    <td><?php echo $record['batch1s']?></td>
    <td><?php echo $record['ers1']?>%</td>
  </tr>
  <tr>
    <td>2</td>
    <td><?php echo $record['batch2s']?></td>
    <td><?php echo $record['ers2']?>%</td>
  </tr>
</table>

                                        
                                        
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>