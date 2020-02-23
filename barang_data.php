<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>

<div class="main">
<td width=1000 height="40"><h3 valign="top" align="center">Data Barang</h3>

  <div>
  </div>

  		<td colspan="3" align="left" valign="top">    
          <tr>	<a href="home.php?go=Barang_Form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Add</a></tr>
              	<a href="cetak/cetak_barang.php" class="btn btn-primary"><i class='glyphicon glyphicon-print'></i> Print</a>
              	<a href="export/umr2013_xls.php" class="btn btn-success"><i class='glyphicon glyphicon-cloud-download'></i> Excel</a>
                <a href="home.php" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a>            
                <div align="right"><input type='text' id='input' onkeyup='searchTable()' placeholder="Cari.."></div>
                   <table id="table_brg" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th><th>Kode Barang</th><th>Nama Barang</th>
                            <th>Rak</th><th>Harga satuan</th><th>Stok</th><th>Aksi</th>
                        </tr>
                    </thead>
 					              <tbody>
  						            <?php 
  							             $no=1;                             
							               $sql = "select * from tblbarang order by id desc";
							               $proses = mysql_query($sql);
							               while ($record = mysql_fetch_array($proses))
							               {

						              ?>        
                            <tr>
                              <td><?php echo $no ?></td>
                              <td><?php echo $record['kode_barang'] ?></td>
                              <td><?php echo $record['nama_barang']?></td>
                              <td><?php echo $record['rak']?></td>
                              <td><?php echo $record['harga_beli'];?></td>
                              <td><?php echo $record['stock'] ?> </td>
          								    <td> 
                                  <a href='home.php?go=Barang_Form_Lihat&amp;id=<?php echo $record['id']; ?>'class="btn btn-info"><i class='glyphicon glyphicon-eye-open'></i></a>&nbsp           
                                  <a href='home.php?go=Barang_Form_Ubah&amp;id=<?php echo $record['id']; ?>'class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                                  <a href='home.php?go=Barang_Hapus&amp;id=<?php echo $record['id']; ?> 
                                      'onclick="return confirm('Yakin data akan dihapus?') ";
                                        class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i>
                                  </a>                                         
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
<script>
  $(document).ready( function () {
    $('#table_brg').DataTable();
} );
</script>
<script>
  // Basic example
$(document).ready(function () {
  $('#table_brg').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>