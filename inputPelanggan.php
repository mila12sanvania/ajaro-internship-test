<?php
include("connect.php");
$Kode = $_POST["kode"];
$Nama = $_POST["nama"];
$Deskripsi = $_POST["deskripsi"];
$Stok = $_POST["stok"];
$Harga = $_POST["harga"];
$Berat = $_POST["berat"];


	# Perkisa, jika form kosong berikan pesan error
	if (trim($Kode)=="") {
		echo "Kode masih kosong, isi dengan benar";
	}
	elseif (trim($Nama)=="") {
		echo "Nama masih kosong, isi dengan benar";
	}
	elseif (trim($Deskripsi)=="") {
		echo "deskripsi masih kosong, isi dengan benar";
	}
	elseif (trim($Stok)=="BLANK") {
		echo "stok masih kosong, isi dengan benar";
	}
	elseif (trim($Harga)=="") {
		echo "harga belum diisi, isi dengan benar";
	}
	elseif (trim($Berat)=="") {
		echo "berat belum diisi, isi dengan benar";
	}
	else {
		


$input="insert into barang (kode,nama,deskripsi,stok,harga,berat)
		values ('$Kode','$Nama','$Deskripsi','$Stok','$Harga','$Berat')";
$hasil = mysql_query($input,$conn);
echo "<br>Input Data Berhasil<br>";
	}
?>

