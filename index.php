<!DOCTYPEhtml>
<html>
<head>
     <title>membuat login multi user level Dengan PHP dan mysqli - www.malasngoding.com</title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>membuat login multi user level dengan php dab mysqli <br/> www.malasngoding.com</h1>

    <?php 
   if  
    (isset( $_GET['pesan'])){
     if 
        ($_GET['pesan']=="gagal")
{
   echo "<div class='alert'> username dan password tidak sesuai !</div>";
   }
}

?>

<div class="kotak_login">
    <p class="tulisan_login"></p>

   <form action="cek_login.php" method="post">  <label>Username</label>
  <input type="text" name="Username" class="form_login" placeholder="username.." required="required">

  <lebel>password</lebel>
<input type="Password" name="Password" class="form_login" placeholder="Password.." required="required">

  <input type="submit" class="tombol_login" value="LOGIN">

<br/>
<br/>

 <center>
  <a class="link" href="https://www.malesngoding.com">kembali </a>
  </center>
</from>

  </div>
</body>
  </html>