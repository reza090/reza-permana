<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 150px;
  position: fixed;
  z-index: 1;
  top: 40px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #000099;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  margin-left: 160px; /* Same width as the sidebar + left position in px */
  font-size: 13px; /* Increased text to enable scrolling */
  padding: 0px 8px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 14px;}
}
</style>
</head>
<body>

<div class="sidenav">
   <a><h4>Barang</h4></a>
    
  <a href="home.php?go=Barang"><i class='glyphicon glyphicon-file'></i> Data Barang</a>
  <a href="home.php?go=Pemasok"><i class='glyphicon glyphicon-file'></i> Data Supplier</a>
  <a href="home.php?go=Pembelian"><i class='glyphicon glyphicon-save'></i> Pembelian Barang</a>
  <a href="home.php?go=Penjualan"><i class='glyphicon glyphicon-open'></i> Pemakaian Barang</a>
  <a><h4>Laporan</h4></a>
    <a href="home.php?go=Laporan_Penjualan_Form"><i class='glyphicon glyphicon-book'></i> Laporan Pemakaian</a>
    <a href="home.php?go=Laporan_Pembelian_Form"><i class='glyphicon glyphicon-book'></i> Laporan Pembelian</a>
</div>

</body>
</html> 