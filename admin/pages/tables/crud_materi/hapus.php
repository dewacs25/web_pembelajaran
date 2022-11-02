<?php

include "../../../../db/koneksi.php";
session_start();
if ($_SESSION['admin'] == "") {
	header("location:../index.php?pesan=gagal1");
} else {
	if (isset($_GET['id'])) {


		$id = $_GET['id'];

		$ceknama = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_materi WHERE id_materi='$id'"));
		$namagambar = $ceknama['gambar'];

		unlink('../../../public/img/gambar_materi/' . $namagambar);
		$sql = mysqli_query($conect, "DELETE FROM tb_materi WHERE id_materi='$id'");

		if ($sql) {
			echo "<script>alert('hapus berhasil');document.location='../materi.php'</script>";
		} else {
			echo "<script>alert('hapus gagal silahkan coba lagi');</script>";
		}
	}
}
