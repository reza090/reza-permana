<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">


    <div>

  <td width=1000 height="40"><h3 valign="top" align="center">Data Supplier</h3></td>
  <tr>
    <td colspan="3" align="left" valign="top">
	     <a href="home.php?go=Pemasok" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
</td>
</tr>
</div>

<SCRIPT language=Javascript>
//Membuat validasi hanya untuk input angka menggunakan kode javascript
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>

<?php
$sql = "select * from tblpemasok where id ='$_GET[id]'";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
?>

<form  id='form1' method="POST" 
                      action='home.php?go=Pemasok_Ubah'
                      class="form-horizontal" role="form">
                     
  <table width="600" border="0" height="400">
  <tr>
    <td>Kode Supplier</td>
    <td><input type="text" class="form-control required" id="kdpemasoktxt" name='kdpemasoktxt'
        value="<?php echo $record['kode_pemasok']?>" readonly="readonly" maxlength="50"></td>
  </tr>
  <tr>
    <td>Nama Supplier</td>
    <td><input type="text" class="form-control required" id="nmpemasoktxt" name='nmpemasoktxt'
       placeholder="Masukan nama pemasok" maxlength="50" value="<?php echo $record['nama_pemasok']?>"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="almtxt" class="form-control required" id="almtxt"><?php echo $record['alamat'] ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="btn btn-primary" name='submit' value="Ubah Data" /></td>
  </tr>
</table>
</form>

</div>

