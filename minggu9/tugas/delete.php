<?php
$conn = mysqli_connect("localhost","root","","tugas_9");

$judul = $_GET["judul"];
$querydelete = "DELETE FROM konten WHERE judul = '$judul'";
mysqli_query($conn,$querydelete);

header("location:content.php");
?>
