<?php

include "../../../../db/koneksi.php";
session_start();
if ($_SESSION['admin'] == "") {
	header("location:../index.php?pesan=gagal1");
} else {
	if (isset($_GET['id'])) {


		$id = $_GET['id'];

		$ceknama = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_isi_materi WHERE id_isi='$id'"));
		$id_materi = $ceknama['id_materi'];

		$sql = mysqli_query($conect, "DELETE FROM tb_isi_materi WHERE id_isi='$id'");

		if ($sql) {
			echo "<script>alert('hapus berhasil');document.location='index.php?id=$id_materi'</script>";
		} else {
			echo "<script>alert('hapus gagal silahkan coba lagi');</script>";
		}
	}
}
