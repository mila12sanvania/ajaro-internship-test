<html>
	<head>
		<title>Kelola Data Barang</title>
		<link rel="stylesheet" type="text/css" href="11.css"/>
	</head>
		<body>
		<h3><div class= "jdl">KELOLA DATA BARANG</div></h3>
		<br>
		<br>
		
		<table width= 80% height= 10% align="center">
			<tr>
				<td><b> Data Barang</td></b>
				<td><p align="right"><a href = "input.php"><Button class ="btn">Tambah</a></Button>
			</tr>
		</table>
 		
		<table width= 80% height= 20% align= "center" border = 1 cellpadding= 0 cellspacing= 0>
			<tr align= "center">
				<td><div class= "judul">Kode</div></td>
				<td><div class= "judul">Nama</div></td>
				<td><div class= "judul">Harga</div></td>
				<td><div class= "judul">Aksi</div></td>
			
			</tr>
			
			<?php
			//koneksi ke database
			include("connect.php");
			//mengambil data dari tabel barang
			$tampil = mysql_query("select * from barang");
			while ($data = mysql_fetch_array($tampil)) {
			?>
			
			<tr width = 80% height = 30% align= "center">
				<td><?php echo $data['kode']; ?> </td>
				<td><?php echo $data['nama']; ?> </td>
				<td><?php echo $data['harga']; ?> </td>
			<td class="text"><a href="edit.php?id=<?php echo $data['id'];?>">Edit   |</a>
				<a href="hapus.php?id=<?php echo $data['id'];?>">Hapus</a></td>
			
			</tr>	
			<?php
			     }
			?>
			
			
		
		</table>
		</body>
	</html>