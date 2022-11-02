<?php

include "../../../../db/koneksi.php";
session_start();
if ($_SESSION['admin'] == "") {
	header("location:../index.php?pesan=gagal1");
} else {
	if (isset($_GET['id'])) {


		$id = $_GET['id'];

		$ceknama = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_artikel WHERE id_artikel='$id'"));
		$namagambar = $ceknama['gambar'];

		unlink('../../../public/img/gambar_artikel/' . $namagambar);
		$sql = mysqli_query($conect, "DELETE FROM tb_artikel WHERE id_artikel='$id'");

		if ($sql) {
			echo "<script>alert('hapus berhasil');document.location='../artikel.php'</script>";
		} else {
			echo "<script>alert('hapus gagal silahkan coba lagi');</script>";
		}
	}
}
