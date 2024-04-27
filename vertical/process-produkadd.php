<?php
include 'koneksi.php';

if(isset($_POST['tambah']))
{

		// //tangkap data dari form
		$ambilnama  	= $_POST['Nama'];
		$ambilkategori	= $_POST['Kategori'];
		$ambilharga	= $_POST['Harga'];
		$ambilstok 	= $_POST['Stok'];
		$ambilhargaproduksi =$_POST['hargaproduksi'];
		$ambildeskripsi	= $_POST['Deskripsi'];
		$ambilgambar = $_FILES["Gambar"]["name"];

	

		// // Direktori untuk menyimpan file
		$targetDir = "assets/images/products/";
		$rand = rand(); // Menghasilkan nomor acak
		$targetFile = $targetDir . $rand . basename($_FILES["Gambar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

		// // Cek apakah file adalah gambar
		$check = getimagesize($_FILES["Gambar"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			echo "File bukan gambar.";
			$uploadOk = 0;
		}

		// // Cek jika file sudah ada
		if (file_exists($targetFile)) {
			echo "Maaf, file sudah ada.";
			$uploadOk = 0;
		}

		$maxSize = 5 * 1024 * 1024; // 5 MB

		// // Cek jika file terlalu besar
		if ($_FILES['Gambar']['size'] > $maxSize) {
			echo "Maaf, file Anda terlalu besar. Ukuran maksimum adalah 5 MB.";
			$uploadOk = 0;
		}

		
	
		// Upload file jika lolos pemeriksaan
		if ($uploadOk == 1) {
			
			if (move_uploaded_file($_FILES["Gambar"]["tmp_name"], $targetFile)) {

				
				
			
				//simpan data ke database
				$query = "INSERT INTO produk (NamaProduk, KategoriID,HargaProduksi, HargaSatuan, Stok, Deskripsi, GambarProduk)			
				VALUES('$ambilnama',$ambilkategori,'$ambilhargaproduksi', '$ambilharga','$ambilstok', '$ambildeskripsi','$rand$ambilgambar')";
				
				$run = mysqli_query($koneksi, $query);
				$idproduk = mysqli_insert_id($koneksi);

				$totalpengeluaran = $ambilhargaproduksi*$ambilstok;
				$queryproduksi =mysqli_query ($koneksi,"INSERT INTO produksi(ProdukID,TanggalProduksi,JumlahProduksi,TotalPengeluaran)
				VALUES('$idproduk',CURRENT_DATE,'$ambilstok','$totalpengeluaran' ) ");

				

				

				if ($run) {
					header("location: app-product-list.php");
				} else {
					echo "Maaf, terjadi kesalahan saat meng-upload file Anda.";
				}
			}
		}


}
?>