 <?php include "../koneksi.php" ?>
 <table width="900" class="table table-striped">
  <a>Daftar Barang</a>
  <br></br>
<thead>
        <tr>
          <th width="5%" bgcolor="#CCCCCC" scope="col">No</th>
          <th width="15%" align="left" bgcolor="#CCCCCC" scope="col">Kode Barang</th>
          <th width="43%" align="left" bgcolor="#CCCCCC" scope="col">Nama Barang</th>
          <th width="16%" align="right" bgcolor="#CCCCCC" scope="col">Harga Satuan</th>
          <th width="8%" align="center" bgcolor="#CCCCCC" scope="col">Stok</th>
        </tr>
      </thead>
       <tbody>
  <?php 
  $no=1;                             
$sql = "select * from tblbarang ";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{

?>        
<tr>
      <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
      <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['kode_barang'] ?></td>
      <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['nama_barang']?></td>
      <td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record['harga_beli'], 0, ',','.') ?></td>
      <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $record['stock']?></td>
      
 </tr>
                                    
          								


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
                            
                            
                            <script language="javascript">
window.print()
</script>