<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style> 

<link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

<SCRIPT language=Javascript>

function isNumberKey(evt)
//Membuat validasi hanya untuk input angka menggunakan kode javascript
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}

</script>

<script src="JQuery/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
	$("#tgl").datepicker({
      showOn: "both", buttonImage: "gambar/calendar.png", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});		
	
	function cari_barang_coba(){
		var kode=$("#kdbarangtxt").val();
			if(kode!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_coba.php",
					data:"kode="+kode,
					success:function(data){
					$("#nmbarangtxt").val(data)
					}
				});
			}
			 
						                                   
	} 
	
	$('#kdbarangtxt').change(function() {
		cari_barang_coba();
		$("#jmltxt").focus()	
    });		
		
})		
</script>
<form id="form1" name="form1" method="post" action="coba_Simpan.php">
  <table width="700" border="0" align="center">
    <tr>
      <td width="14%" align="left" valign="middle">Kode Barang</td>
      <td width="1%" align="left" valign="middle">:</td>
      <td width="49%" align="left" valign="top"><input name="kdbarangtxt" type="text" id="kdbarangtxt" size="10" maxlength="50" />
      </td>
       <td align="left" valign="middle">Nama Barang</td>
      <td align="left" valign="middle">:</td>
      <td align="left" valign="top"><input name="nmbarangtxt" type="text" id="nmbarangtxt" size="35" maxlength="50" readonly="readonly" /></td>
    <td align="left" valign="middle">Jumlah</td>
      <td align="left" valign="middle">:</td>
      <td colspan="4" align="left" valign="top"><input name="jmltxt" type="text" id="jmltxt" size="5" maxlength="15" onkeyup="subtotal(this.value,getElementById('jmltxt').value);" onkeypress="return isNumberKey(event)" /></td>
  <td colspan="4" align="left" valign="top"><input type="submit" name="tambahbtn" id="tambahbtn" value="Tambah" />
      <input type="submit" name="prosesbtn" id="prosesbtn" value=" Proses " /></td>
    </tr>