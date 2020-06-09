<?php 
	 //Create database connection using config file
		include_once ("koneksi_db.php");
		if (isset($_POST['update'])){
			$nip = $_POST['nip'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$jabatan_akademik = $_POST['jabatan_akademik'];
			$prodi = $_POST['prodi'];
			//insert user into table
			$result = mysqli_query($connection, "UPDATE dosen SET nip='$nip',nama='$nama',alamat='$alamat',jabatan_akademik='$jabatan_akademik',prodi='$prodi' WHERE nip='$nip')");
			
			echo '<div class="alert alert-primary" role="alert"> Data dosen berhasil diperbaharui ! </div>';
			
			header ("Location: index.php");
		}
	?>