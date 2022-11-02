<?php 

	session_start();
	unset($_SESSION['admin'],$_SESSION['idadmin']);
	echo "<script>alert('Dadah :(');document.location='index.php'</script>";



 ?>