
<!DOCTYPE html>

<html>

<head>

	<title>Halaman oprator - www.malasngoding.com</title>

</head>

<body>

	<?php 

	session_start();

 

	//cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
	header("location:index.php?pesan=gagal");
	}

 

	?>

	<h1>Halaman oprator</h1>

 

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b>
<?php 
echo $_SESSION['level']; 
?></b>.</p>

	<a href="logout.php">LOGOUT</a>

 

	<br/>

	<br/>

 

	<a>membuat login multi level dengan php</a> 

</body>

</html>