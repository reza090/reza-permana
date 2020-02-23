<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">
    <td width=1000 height="40"><h3 valign="top" align="center">Data Pembelian Barang </h3>
    </td>

  <tr>
    <td colspan="3" align="left" valign="top"></td></tr>
        <table class="table table-hover table-condensed table-striped" align="left">
        <right> <a href="home.php?go=Pembelian_Form" class="btn btn-success">
                <i class='glyphicon glyphicon-plus'></i> Add</a>
								<a href="cetak/cetak_pembelian.php" class="btn btn-primary"><i class='glyphicon glyphicon-print'></i> Print</a>
                <a href="export/pembelian_xls.php" class="btn btn-success"><i class='glyphicon glyphicon-cloud-download'></i> Excel</a>
                <a href="home.php" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
                <div align="right"><input type='text' id='input' onkeyup='searchTable()' placeholder="Cari.."></div>
          <thead>
              <tr>
                <th>No</th><th>No Faktur</th><th>Tanggal</th>
                <th>Pemasok</th><th>Total</th><th>Aksi</th>
              </tr>
          </thead>
          
          <tbody>
<?php 
$no=1;
$sql = "select * from tbltransaksi_beli inner join tblpemasok on tbltransaksi_beli.kode_pemasok = 
tblpemasok.kode_pemasok order by tbltransaksi_beli.id desc";
$proses = mysql_query($sql);
while ($record = mysql_fetch_array($proses))
{
$tgl = substr($record['tanggal'],8,2)."-".substr($record['tanggal'],5,2)."-". substr($record['tanggal'],0,4);
?>
        
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $record['no_faktur'] ?></td>
                  <td> <?php echo $tgl ?></td>
                  <td><?php echo $record['nama_pemasok'] ?></td>
									<td>Rp.<?php echo number_format($record['total'], 0, ',','.') ?></td>
          				<td><a href='?go=Pembelian_Form_Rinci&amp;id=<?php echo $record['no_faktur']; ?>'
                          class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                      <a href='?go=Pembelian_Hapus&amp;id=<?php echo $record['no_faktur']; ?>
                          'onclick="return confirm('Yakin data akan dihapus?') ";
                            class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a>                                         
                  </td>


                 <?php $no++;} 
                  ?>
                </tr> 
                </tbody>

          </table>
   
</div>


<script>
function searchTable() {
    var input;
    var saring;
    var status; 
    var tbody; 
    var tr; 
    var td;
    var i; 
    var j;
    input = document.getElementById("input");
    saring = input.value.toUpperCase();
    tbody = document.getElementsByTagName("tbody")[0];;
    tr = tbody.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
                status = true;
            }
        }
        if (status) {
            tr[i].style.display = "";
            status = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>






