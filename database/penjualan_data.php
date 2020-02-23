
<h3 valign="top" align="center">Penjualan Barang</h3>
<div style="overflow:auto; width:100%px; height:600px; padding:1px; border:1px solid white">
<div class='col-md-8 col-md-offset-2'>
                        <table class="table table-hover table-condensed table-striped">
                       <right> <a href="home.php?go=Penjualan_Form" class="btn btn-success">
                                           <i class='glyphicon glyphicon-plus'></i> Add</a></right>
                                <thead>
                                    <tr>
                                        <th>No</th><th>No Faktur</th><th>Tanggal</th>
                                        <th>Total</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
 <?php
$no=1;
$sql = "select * from tbltransaksi_jual order by id desc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
$tgl = substr($record['tanggal'],8,2)."-".substr($record['tanggal'],5,2)."-". substr($record['tanggal'],0,4); 		
?>
        
                                    <tr>
                                        <td><?php echo $no ?></td><td>
                                         <?php echo $record['no_faktur'] ?>  
                                        </td>
                                        <td> <?php echo $tgl ?></td>
                                     
                                        
                                        <td>Rp.<?php echo number_format($record['total'], 0, ',','.') ?></td>
          								<td><a href='?go=Penjualan_Form_Rinci&amp;id=<?php echo $record['no_faktur']; ?>'
             class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                                            <a href='?go=Penjualan_Hapus&amp;id=<?php echo $record['no_faktur']; ?>
                                            'onclick="return confirm('Yakin data akan dihapus?') ";
                 class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a>                                         
                                        </td>


   <?php $no++;} 
   ?>
 </tr> 
</tbody>

                            </table>
    </div>
</div>



