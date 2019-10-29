<?php
$conn = mysqli_connect("localhost","root","","PABW_minggu8");

$nama = $_POST["hapus"];
$querydelete = "DELETE FROM mahasiswa WHERE nama like '%$nama%'";
mysqli_query($conn,$querydelete);
	echo "
			<script>
				alert('hapus data berhasil');
				document.location.href='tugas_utama.php';
			</script>
		";
?>
