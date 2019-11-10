<?php
session_start();
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

  	<!-- form login -->
  	<div class="container">
		<form action="login.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">USERNAME</label>
		    <input type="text" name="username" class="form-control" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">PASSWORD</label>
		    <input type="password" name="pw" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" name="login" class="btn btn-primary">MASUK</button>
		</form>
	</div>
  <?php
  if(isset($_SESSION['message'])){
  ?>
  <div>
     <?php echo $_SESSION['message']; ?>
  </div>
  <?php
  unset($_SESSION['message']);
  }
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>