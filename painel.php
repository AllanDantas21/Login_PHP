<?php
 include("protect.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel</title>
  <link rel="stylesheet" href="painel.css">
</head>
<body>
  <div class="content">
    <h1 class="titulo">Bem vindo ao painel <?php echo $_SESSION['nome']; ?></h1>
    <img class="ImgPainel" src="imagePainel.png" alt="Imagem do painel">
    <p>
      <a href="logout.php">Sair</a>
    </p>
    </div>
</body>
</html>