 <?php 
 	setcookie("test_cookie", "test", time() + 3600, '/'); 
 ?>
 <html>
 <body>
	 <?php if(count($_COOKIE) > 0) {
	 echo "Cookies enabled.";
	 } else {
	 echo "Cookies disabled.";
	 } ?>
	 <!-- analisis disini -->
	 <p>dari analisis yang dilakukan jika kita membuka url melalui local host maka cookies akan enable,namun jika kita membuka url langsung menggunakan alamat url maka cookies disable</p>
 </body>
 </html>