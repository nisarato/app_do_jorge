<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION['login_user']) || !isset($_SESSION['user_role'])) {
  header("Location: index.php");
}

$role = $_SESSION['user_role'];
$username = $_SESSION['login_user'];

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="styles2.css">
<script src="jquery-3.3.1.min.js"></script>
<title>Welcome to Otário Bank</title>
</head>

<!-- Esta parte contém Javascript -->
<script>
$(document).ready(function() {
    $("#menu_div").animate({width: "220px"});
});
</script>
<!-- Fim do Javascript -->

<body>

<!-- Esta div corresponde ao menu do lado esquerdo -->
<!-- Menu lateral -->
<div id='menu_div'>
  <?php include 'menu.php';?> 
</div> 


<!-- Esta div corresponde ao conteudo ao lado direito do menu -->
<div id='conteudo'>
    <h1> Envie uma mensagem ao seu gestor de conta </h1>
    <p> Escreva a sua mensagem </p>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <textarea name='mensagem' id='mensagem' > </textarea>
        <p> Pode também fazer o upload de um ficheiro </p>

        <input type="file" name="fileToUpload" id="fileToUpload">
        <p><div class='center_content'><input id="submit_button" type="submit" value="Enviar mensagem" name="submit"></div>
    </form>


</div>


</body>
</html>
