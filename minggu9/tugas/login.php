<?php
 session_start();

 include_once('Db.php');
 $data = new Db();

 if(isset($_POST['login'])){
	 $username =$data->escape_string($_POST['username']);
	 $password =$data->escape_string($_POST['pw']);
	 $auth = $data -> cek($username, $password);

	 if(!$auth){
		 $_SESSION['message'] = 'Username atau password salah'.$username.' '.$password;
		 header('location:index.php');
	 }
	 else{
		 $_SESSION['user'] = $auth;
		 header('location:content.php');
	 }
 }
 else{
	 $_SESSION['message'] = 'Silahkan login terlebih dahulu';
	 header('location:index.php');
 }
 ?>