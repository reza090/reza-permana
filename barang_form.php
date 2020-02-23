<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>
<div class="main">
    <td width=1000 height="40"><h3 valign="top" align="center">Tambah Data Barang</h3>

    <tr>
        <td colspan="3" align="left" valign="top">
        </br></br>
        <a href="home.php?go=Barang" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
      </td>
    </tr>
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
$sql = "select * from tblbarang order by id desc";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$kode = $record['id']+1;
?>
<form  id='form1' method="POST" 
                  action='home.php?go=Barang_Simpan'
                  class="form-horizontal" role="form">
  <table width="600" border="0" height="400">
  <tr>
    <td>Kode Barang</td>
    <td><input type="text" class="form-control required" id="kdbarangtxt" name='kdbarangtxt'
       placeholder="No SAP" maxlength="50"></td>
  </tr>
  <tr>
    <td>Nama Barang</td>
    <td><input type="text" class="form-control required" id="nmbarangtxt" name='nmbarangtxt'
       placeholder="Masukan nama barang" maxlength="50"></td>
  </tr>
  <tr>
    <td>Kelompok</td>
        <td><select name="kelompoklst" id="kelompoklst">    
        <option value="" selected="selected">Pilih disini</option>
        <option value="swd 16tm">SWD 16 TM</option>
        <option value="swd 9tm">SWD 9 TM</option>
        <option value="pielstick">PIELSTICK</option>
        <option value="sulzer">SULZER</option>
        
        </select>
      </td>
  </tr>
  <tr>
    <td>Rak</td>
    <td><input type="text" class="form-control required" id="raktxt" name='raktxt'
       placeholder="Masukan No Rak Barang"  ></td>
  </tr>
  <tr>
    <td>Harga Beli</td>
    <td><input type="text" class="form-control required" id="hrgtxt" name='hrgtxt'
       placeholder="Masukan harga pembelian" onkeypress="return isNumberKey(event)" ></td>
  </tr>
  <tr>
    
    <td><input type="hidden" class="form-control required" id="fototxt" name='fototxt'
        value="<?php echo "$kode.jpg"?>" readonly="readonly" maxlength="50"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="btn btn-primary" name='submit' value="Simpan" /></td>
  </tr>
  </table>
</form>



</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</div>
