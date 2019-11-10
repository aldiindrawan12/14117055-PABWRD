<?php
include_once('DbConnection.php');
class Db extends DbConnection{
	public function __construct(){
		parent::__construct();
	}
	public function cek($username,$password){
		$query = $this->connection->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
		if($query->num_rows > 0){
			$row = $query->fetch_array();
			return $row['id'];
		}
		else{
		return false;
		}
	}
	public function details($sql){
		$query = $this->connection->query($sql);
		$row = $query->fetch_array();
		return $row;
	}

	public function konten($sql){
		$conn = mysqli_connect("localhost","root","","tugas_9");
		$ambildata = $conn->query($sql);
		while($datapecah = $ambildata->fetch_assoc()){
			$data[]=$datapecah;
		}
		return $data;
	}

	public function escape_string($value){
		return $this->connection->real_escape_string($value);
	}

	public function get_konten(){
		
	}

	
}

function tambah($data){
	$id = $data["id"];
	$judul = $data["judul"];
	$isi = $data["isi"];
	$conn = mysqli_connect("localhost","root","","tugas_9");
	$query="INSERT INTO `konten`(`id_pemilik`, `judul`, `isi`) VALUES ($id,'$judul','$isi')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
	}

function update($data){
	$id = $data["id"];
	$judul = $data["judul"];
	$isi = $data["isi"];
	$conn = mysqli_connect("localhost","root","","tugas_9");
	$query="UPDATE konten SET judul='$judul',isi='$isi' WHERE judul = '$judul'";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
	}

function detailubah($sql){
	$conn = mysqli_connect("localhost","root","","tugas_9");
	$query = mysqli_query($conn,$sql);
		$row = $query->fetch_array();
		return $row;
	}

	
?>