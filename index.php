<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

  if(strlen($_POST['email']) == 0) { 
    echo "Preencha seu email";
  }elseif(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha";
  } else { 
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";  
    $sql_query = $mysqli->query($sql_code) or die("falha na conexão do código SQL" . $mysqli->error);

    $quantidade = $sql_query->num_rows; 

    if($quantidade == 1 ){
      $usuario=$sql_query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['id']; 
      $_SESSION['nome'] = $usuario['nome'];   

      header("Location: painel.php");

    }else{
      echo "falha ao logar! E-mail ou Senha incorretos";
    }

  } 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link rel="stylesheet" href="index.css"> 
</head>
<body>
  <div class="Formulario">
  <h1 class="titulo">Acesse sua conta</h1>
  <form action="" method="POST">
     <p>
      <label></label>
        <input class="inpt-mail" type="text" name="email" placeholder="Email">
      </p>
      <p>
        <label></label>
        <input class="inpt-pass" type="password" name="senha" placeholder="Senha">
      </p>
      <p>
        <button class="btn-login" type="submit">Entrar</button>
      </p>
    </form>
  </div>
</body>

</html>