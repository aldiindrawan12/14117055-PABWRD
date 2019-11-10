<?php
  session_start();
  Require 'Db.php';
  $user = new Db();
  $judul = $_GET["judul"];
  $sql = "SELECT * FROM konten WHERE judul = '".$judul."'";
  $row = detailubah($sql);

  if(isset($_POST["submit"])){
    if(update($_POST) > 0 ){
    echo "
      <script>
        alert('berhasil update data');
        document.location.href='content.php';
      </script>
    ";
    }else{
      echo  update($_POST) . "
        <script>
          alert('gagal update data!!');
          document.location.href='content.php';
        </script>
      ";
    }
  }
  
?>

<!DOCTYPE HTML>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <form method="post" action="">
        <div class="form-group">
          <input type="hidden" name="id" class="form-control" value="<?php echo  $_SESSION['user']; ?>">
        </div>
        <div class="form-group">
          <label >judul</label>
          <input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>">
        </div>
        <div class="form-group">
          <label>isi</label>
          <textarea class="form-control" name="isi"><?php echo $row['isi']; ?></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
        <button type="reset" class="btn btn-primary">RESET</button>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
