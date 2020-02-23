<?php include "menubar.php" ;?>
<?php include "msidebar.php" ;?>

<div class="main">


    <td width=1000 height="40"><h3 valign="top" align="center">Data Supplier</h3>    
    </td>
<tr>
  <td colspan="3" align="left" valign="top">
	<a href="home.php?go=Pemasok" class="btn btn-default"><i class='glyphicon glyphicon-repeat'></i> Kembali</a></right>
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
$sql = "select * from tblpemasok order by id desc";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
$kode = $record['id']+1;
?>

<form  id='form1' method="POST" 
                      action='home.php?go=Pemasok_Simpan'
                      class="form-horizontal" role="form">
					  
					  
					  
<table width="600" border="0" height="400">
  <tr>
    <td>Kode Supplier</td>
    <td><input type="text" class="form-control required" id="kdpemasoktxt" name='kdpemasoktxt'
        value="<?php echo "PMS-$kode"?>" readonly="readonly" maxlength="50"></td>
  </tr>
  <tr>
    <td>Nama Supplier</td>
    <td><input type="text" class="form-control required" id="nmpemasoktxt" name='nmpemasoktxt'
       placeholder="Masukan nama pemasok" maxlength="50"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><textarea name="almtxt" class="form-control required" id="almtxt"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" class="btn btn-primary" name='submit' value="Simpan" /></td>
  </tr>
</table>

                     
    
</form>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>


  
      
      