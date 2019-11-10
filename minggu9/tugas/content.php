<?php
 session_start();
   if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
    header('location:index.php');
   }
 include_once('Db.php');
 $user = new Db();
 $sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
 $row = $user->details($sql);
 if($_SESSION['user'] == 1 ){
  $data = $user->konten("SELECT * FROM konten"); 
 }else{
  $data = $user->konten("SELECT * FROM konten WHERE id_pemilik = '".$_SESSION['user']."'") ;
 }
 ?>

<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title></title>
  </head>
  <body>
    <div class="jumbotron">
      <h3 class="display-6">Hello, <?php echo $row["username"] ?> !</h3>
    </div>

  	<!-- konten -->
    <a href='tambah.php?id=<?php echo $row['id']; ?>' class="btn btn-primary">TAMBAH</a>
    <div class="container">
      <?php foreach($data as $key => $value) : ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $value['judul'] ?></h5>
          <p class="card-text"><?php echo $value['isi'] ?></p>
          <a href='update.php?judul=<?php echo $value['judul']; ?>' class="btn btn-primary">EDIT</a>
          <a href='delete.php?judul=<?php echo $value['judul']; ?>' class="btn btn-primary">DELETE</a>
        </div>
      <?php endforeach; ?>  
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>