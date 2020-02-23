<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>
<div class="main">

  <td width=1000 height="40"><h3 valign="top" align="center">Ubah Data Barang</h3>
  </td>
  <td colspan="3" align="left" valign="top"></td>
  </br></br>
  <a href="home.php?go=Barang" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a>

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
$sql = "select * from tblbarang where id ='$_GET[id]'";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
?>

<form  id='form1' method="POST" 
                  action='home.php?go=Barang_Ubah'
                  class="form-horizontal" role="form">

                 <div style="float: left; ;margin:10px 50px 0px 50px;"> <img src="img/<?php echo $record['foto']?>" width="300px" height="300px"></div>
        
      <table width="500" border="0" height="300">
        <th>
          <tr>
              <td>Kode Barang</td>
              <td><input type="text" class="form-control required" id="kdbarangtxt" name='kdbarangtxt'
                          value="<?php echo $record['kode_barang'] ?>" readonly="readonly" maxlength="50">
              </td>
          </tr>
          <tr>
              <td>Nama Barang</td>
              <td><input type="text" class="form-control required" id="nmbarangtxt" name='nmbarangtxt'
                          readonly="readonly" maxlength="50" value="<?php echo $record['nama_barang'] ?>">
              </td>
          </tr>
          <tr>
          <td>Kelompok</td>
          <td><input type="text" class="form-control required" id="kdbarangtxt" name='kdbarangtxt'
                          readonly="readonly" maxlength="50" value="<?php echo $record['kode_kelompok'] ?>">
        
          </select>
          </td>
          </tr>
          <tr>
              <td>Rak</td>
              <td><input type="text" class="form-control required" id="raktxt" name='raktxt' readonly="readonly"
                  value="<?php echo $record['rak'] ?>">
              </td>
          </tr>
          <tr>
              <td>Harga</td>
              <td><input type="text" class="form-control required" id="hrgtxt" name='hrgtxt' readonly="readonly"
                          value="<?php echo $record['harga_beli'] ?>"onkeypress="return isNumberKey(event)" >
              </td>
          </tr>
        </th>


      </table>

</form>

</div>

 







