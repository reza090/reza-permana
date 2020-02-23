<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">

    <td height="40"><h3 valign="top" align="center">Data Pengguna</h3></td>

  
<div>
                        <table class="table table-hover table-condensed table-striped" width="800" align="left" >
                                <right> <a href="home.php?go=Pengguna_Form" class="btn btn-success">
                                           <i class='glyphicon glyphicon-plus'></i> Add</a></right>
                                <thead>
                                    <tr>
                                        <th>No</th><th> user </th><th> aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                
<?php
$no=1;
$query = "select * from tblpengguna order by id asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))

{
?>        
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data['user'] ?></td>
                                        <td><a href='?go=Pengguna_Hapus&amp;id=<?php echo $data['id']; ?>'
                                                class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp
                                            <a href='?go=Pengguna_Hapus&amp;id=<?php echo $data['id']; ?>
                                                'onclick="return confirm('Yakin data akan dihapus?') ";
                                                class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a>               
                                        </td>
                                        <?php $no++;} ?>
                                    </tr>
                                    </tbody>

                            </table>
    </div>

    </div>



