<?php error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php include "koneksi.php" ?>
<?php session_start();
	switch($_GET['go']){
		case 'Home': 
			include("home_info.php"); 
		break;
		
		case 'profile': 
			include("profile.php"); 
		break;
		
		case 'Pengguna': 
			include("pengguna_data.php"); 
		break;	
		
		case 'Pengguna_Form': 
			include("pengguna_form.php"); 
		break;	
		
		case 'Pengguna_Simpan': 
			include("pengguna_simpan.php"); 
		break;			
		
		case 'Pengguna_Hapus': 
			include("pengguna_hapus.php"); 
		break;
		
		case 'Pengguna_Ubah_Password_Form': 
			include("pengguna_ubah_password_form.php"); 
		break;								
		
		case 'Pengguna_Ubah_Password_Simpan': 
			include("pengguna_ubah_password_simpan.php"); 
		break;	
		
		case 'barang_produksi': 
			include("barang_produksi.php"); 
		break;
		case 'Barang': 
			include("barang_data.php"); 
		break;		
		
		case 'Barang_Form': 
			include("barang_form.php"); 
		break;	
		
		case 'Barang_Simpan': 
			include("barang_simpan.php"); 
		break;	
		
		case 'Barang_Form_Ubah': 
			include("barang_form_ubah.php"); 
		break;			
		case 'Barang_Form_Lihat': 
			include("barang_form_lihat.php"); 
		break;			

		case 'Barang_Ubah': 
			include("barang_ubah.php"); 
		break;						
		
		case 'Barang_Hapus': 
			include("barang_hapus.php"); 
		break;		
		
		case 'Pemasok': 
			include("pemasok_data.php"); 
		break;		
		
		case 'Pemasok_Form': 
			include("pemasok_form.php"); 
		break;	
		
		case 'Pemasok_Simpan': 
			include("pemasok_simpan.php"); 
		break;	
		
		case 'Pemasok_Form_Ubah': 
			include("pemasok_form_ubah.php"); 
		break;			
		
		case 'Pemasok_Ubah': 
			include("pemasok_ubah.php"); 
		break;						
		
		case 'Pemasok_Hapus': 
			include("pemasok_hapus.php"); 
		break;
		
		
		case 'penimbangan': 
			include("penimbangan_data.php"); 
		break;		
		
		case 'penimbangan_form': 
			include("penimbangan_form.php"); 
		break;
		
		case 'penimbangan_form_ubah': 
			include("penimbangan_form_ubah.php"); 
		break;	
		
		case 'penimbangan_hapus': 
			include("penimbangan_hapus.php"); 
		break;
		
		case 'penimbangan_simpan': 
			include("penimbangan_simpan.php"); 
		break;	
		
	case 'Pelanggan': 
			include("pelanggan_data.php"); 
		break;		
		
		case 'Pelanggan_Form': 
			include("Pelanggan_form.php"); 
		break;	
		
		case 'Pelanggan_Simpan': 
			include("Pelanggan_simpan.php"); 
		break;	
		
		case 'Pelanggan_Form_Ubah': 
			include("Pelanggan_form_ubah.php"); 
		break;			
		
		case 'Pelanggan_Ubah': 
			include("Pelanggan_ubah.php"); 
		break;						
		
		case 'Pelanggan_Hapus': 
			include("Pelanggan_hapus.php"); 
		break;
							
		
		case 'Kelompok': 
			include("kelompok_data.php"); 
		break;		
		
		case 'Kelompok_Form': 
			include("kelompok_form.php"); 
		break;	
		
		case 'Kelompok_Simpan': 
			include("kelompok_simpan.php"); 
		break;	
		
		case 'Kelompok_Form_Ubah': 
			include("kelompok_form_ubah.php"); 
		break;			
		
		case 'Kelompok_Ubah': 
			include("kelompok_ubah.php"); 
		break;						
		
		case 'Kelompok_Hapus': 
			include("kelompok_hapus.php"); 
		break;		
		
		case 'order': 
			include("order_data.php"); 
		break;		
		
		case 'order_form': 
			include("order_form.php"); 
		break;
		
		case 'order_hapus': 
			include("order_hapus.php"); 
		break;
		
		
		case 'order_form_ubah': 
			include("order_form_ubah.php"); 
		break;
			
		
		case 'order_simpan': 
			include("order_simpan.php"); 
		break;
		
		case 'po_data': 
			include("po_data.php"); 
		break;
		
		case 'po_form': 
			include("po_form.php"); 
		break;
		
		case 'po_form_rinci': 
			include("po_form_rinci.php"); 
		break;
		
		case 'po_simpan': 
			include("po_simpan.php"); 
		break;
		
		
		case 'formula': 
			include("formula_data.php"); 
		break;		
		
		case 'formula_form': 
			include("formula_form.php"); 
		break;
		
		case 'formula_hapus': 
			include("formula_hapus.php"); 
		break;	
		
		case 'formula_form_ubah': 
			include("formula_form_ubah.php"); 
		break;
		
		case 'formula_simpan': 
			include("formula_simpan.php"); 
		break;
		
		case 'pemakaian': 
			include("pemakaian_data.php"); 
		break;		
		
		case 'pemakaian_form': 
			include("pemakaian_form.php"); 
		break;	
		
		case 'pemakaian_simpan': 
			include("pemakaian_simpan.php"); 
		break;
		
		
		case 'pengisian': 
			include("pengisian_data.php"); 
		break;		
		
		case 'pengisian_form': 
			include("pengisian_form.php"); 
		break;	
		
		case 'pengisian_simpan': 
			include("pengisian_simpan.php"); 
		break;
		
		case 'penjualan_barang': 
			include("penjualan_barang_data.php"); 
		break;		
		
		case 'penjualan_barang_form': 
			include("penjualan_barang_form.php"); 
		break;
		
		case 'penjualan_barang_form_rinci': 
			include("penjualan_barang_form_rinci.php"); 
		break;
		
		case 'penjualan_barang_simpan': 
			include("penjualan_barang_simpan.php"); 
		break;
		
		case 'laporan_produksi': 
			include("laporan_produksi_data.php"); 
		break;		
		
		case 'laporan_produksi_form': 
			include("laporan_produksi_form.php"); 
		break;	
		
		case 'laporan_produksi_hapus': 
			include("laporan_produksi_hapus.php"); 
		break;	
		
		
		case 'laporan_produksi_form_ubah': 
			include("laporan_produksi_form_ubah.php"); 
		break;	
		
		case 'laporan_produksi_simpan': 
			include("laporan_produksi_simpan.php"); 
		break;
		
		case 'laporan_hasil_produksi': 
			include("laporan_hasil_produksi_data.php"); 
		break;		
		
		case 'laporan_hasil_produksi_form': 
			include("laporan_hasil_produksi_form.php"); 
		break;	
		
		case 'laporan_hasil_produksi_simpan': 
			include("laporan_hasil_produksi_simpan.php"); 
		break;
		
		
		case 'Pembelian': 
			include("pembelian_data.php"); 
		break;		
		
		case 'Pembelian_Form': 
			include("pembelian_form.php"); 
		break;	
		
		case 'Pembelian_Simpan': 
			include("pembelian_simpan.php"); 
		break;	
		
		case 'Pembelian_Form_Rinci': 
			include("pembelian_form_rinci.php"); 
		break;			
		
		case 'Pembelian_Ubah': 
			include("pembelian_ubah.php"); 
		break;						
		
		case 'Pembelian_Hapus': 
			include("pembelian_hapus.php"); 
		break;	
		
		case 'Penjualan': 
			include("penjualan_data.php"); 
		break;		
		
		case 'Penjualan_Form': 
			include("penjualan_form.php"); 
		break;	
		
		case 'Penjualan_Simpan': 
			include("penjualan_simpan.php"); 
		break;	
		
		case 'Penjualan_Form_Rinci': 
			include("penjualan_form_rinci.php"); 
		break;			
		
		case 'Penjualan_Ubah': 
			include("penjualan_ubah.php"); 
		break;						
		
		case 'Penjualan_Hapus': 
			include("penjualan_hapus.php"); 
		break;
		
		case 'laporan_pemakaian_form': 
			include("laporan_pemakaian_form.php"); 
		break;	
		
		case 'laporan_pemakaian': 
			include("laporan_pemakaian.php"); 
		break;	
		
		
		case 'Laporan_Pembelian_Form': 
			include("laporan_pembelian_form.php"); 
		break;	
		
		case 'Laporan_Pembelian': 
			include("laporan_pembelian.php"); 
		break;						
		
		case 'Laporan_Penjualan_Form': 
			include("laporan_penjualan_form.php"); 
		break;		
		
		case 'Laporan_Penjualan': 
			include("laporan_penjualan.php"); 
		break;											
	
		case '':
			include("home_info.php");		
		break;		
	};
?>	