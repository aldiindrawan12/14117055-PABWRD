<?php

$conn=mysqli_connect ("localhost","root","")
		or die ("koneksi gagal");
mysqli_select_db($conn,"PABW_minggu8");

$nrp = $_POST["nrp"];
$nama = $_POST["nama"];
$jurusan = $_POST["jurusan"];
$foto = upload();
if(!$foto){
		return false;
}

function KD_jur(){
	global $conn;
	global $jurusan;
	mysqli_select_db($conn,"PABW_minggu8");
	$select = "SELECT KD_jur FROM jurusan WHERE jurusan='$jurusan';";
	$hasilselect = mysqli_query($conn,$select);
	while($baris = mysqli_fetch_array($hasilselect)){
		return $baris[0];
	} 
}

function upload(){ //fungsi khusus file foto
		$namafile = $_FILES['foto']['name'];
		$error = $_FILES['foto']['error'];
		$tempat = $_FILES['foto']['tmp_name'];

		//cek upload
		if($error == 4){
			echo "
			<script>
				alert('upload foto dulu');
			</script>
			";
			return false;
		}

		//cek ekstensi
		$ekstensi=['jpg','jpeg','png'];
		$ekstensigambar = explode('.',$namafile); //fungsi untuk mecah string dengan pemecah . ,aldi.jpg = ['aldi','jpg']
		$ekstensigambar = strtolower(end($ekstensigambar)); 
		/*
		strtolower = semua huruf kecil
		end(array) = untuk ambil value terakhir array
		*/
		if(!in_array($ekstensigambar, $ekstensi)){ //apakah $ekstensigambar ada di $ekstensi
		echo "
			<script>
				alert('tipe gambar harus jpg/jpeg/png');
			</script>
			";

			return false;
		}

		//jika lolos cek
		move_uploaded_file($tempat, 'img/' . $namafile);

		return $namafile;
}

	$KD_jur = KD_jur();
	$tambah="insert into mahasiswa (nrp,nama,foto,KD_jur)
	values ('$nrp','$nama','$foto','$KD_jur')";
	$hasil = mysqli_query($conn,$tambah);
	
	if(mysqli_affected_rows($conn) > 0 ){
		echo "
			<script>
				alert('berhasil menambah data');
				document.location.href='tugas_utama.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('gagal menambah data!!');
				document.location.href='tugas_utama.php';
			</script>
		";
	}


?>