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
	
	function cari_barang_laporan(){ 
		var kode2=$("#itemtxt").val();
			if(kode2!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_laporan.php",
					data:"kode2="+kode2,
					success:function(data){
					$("#colortxt").val(data)
					}
				});
			} 
		var kode3=$("#itemtxt").val();
			if(kode3!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_laporan.php",
					data:"kode3="+kode3,
					success:function(data){
					$("#modeltxt").val(data)
					}
				});
			} 
							      
		var kode4=$("#itemtxt").val();
			if(kode4!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_laporan.php",
					data:"kode4="+kode4,
					success:function(data){
					$("#ltxt").val(data)
					}
				});
			}
			var kode5=$("#itemtxt").val();
			if(kode5!=""){
				$.ajax({
					type:"post",
					url:"cari_barang_laporan.php",
					data:"kode5="+kode5,
					success:function(data){
					$("#stxt").val(data)
					}
				});
			} 
		  				                               
	} 
	
	$('#itemtxt').change(function() {
		cari_barang_laporan();
		$("#hasiltxt").focus()	
    });		
		
})		
</script>

<script type="text/javascript"><!--

function updatetotalptxt() {

document.form1.totalptxt.value = (document.form1.hasilstxt.value -0) - (document.form1.totalstxt.value -0);

}
function updatetotaltxt() {

document.form1.totaltxt.value = (document.form1.hasiltxt.value -0) - (document.form1.totalbstxt.value -0);

}

//--></script>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="home.php?go=laporan_produksi_simpan">
<table width="600" border="1">
  <tr>
    <td>Item</td>
    <td><input name="itemtxt" type="text" id="itemtxt" size="5" maxlength="15" /></td>
    </td>
  </tr>
  <tr>
    <td>Color</td>
    <td><input name="colortxt" type="text" id="colortxt" size="5" maxlength="15"  /></td>
    </td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input name="modeltxt" type="text" id="modeltxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Size L</td>
    <td><input name="ltxt" type="text" id="ltxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>hasil penimbangan L</td>
    <td><input name="hasiltxt" type="text" id="hasiltxt" size="5" maxlength="15" onChange="updatetotaltxt()"  /></td>
    </td>
  </tr>
  <tr>
    <td>sisa</td>
    <td><input name="totalbstxt" type="text" id="totalbstxt" size="5" maxlength="15" onChange="updatetotaltxt()" /></td>
    </td>
  </tr>
  <tr>
    <td>Size S</td>
    <td><input name="stxt" type="text" id="stxt" size="5" maxlength="15" readonly="readonly" /></td>
    </td>
  </tr>
  <tr>
    <td>Hasil Penimbangan S</td>
    <td><input name="hasilstxt" type="text" id="hasilstxt" size="5" maxlength="15" onChange="updatetotalptxt()" /></td>
    </td>
  </tr>
  <tr>
    <td>Sisa</td>
    <td><input name="totalstxt" type="text" id="totalstxt" size="5" maxlength="15" onChange="updatetotalptxt()"  /></td>
    </td>
  </tr>
  <tr>
    <td>shift</td>
    <td><label for="shift"></label>
        <select name="shift" id="shift">
        <option value="" selected="selected"></option>
        <option>Shift 1</option>
        <option>Shift 2</option>
        <option>Shift 3</option></td>
    </td>
  </tr>
  <tr>
    <td><input name="simpan" type="submit" value="simpan"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>