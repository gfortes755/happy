<?php
session_start();

// Verificar se o usuário está autenticado, caso contrário, redirecionar para a página de login.
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Página de Vídeos</title>
  <title>Página de Jogos</title>
</head>
<body>
  <nav>
    <ul id="menu-horizontal">
      <li><a href="#">Account</a></li>
      <li><a href="videos.php">Vídeos</a></li>
      <li><a href="games.php">Jogos</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <footer>
    <section>
      <h1>Página de Jogos</h1>
      <p>Conteúdo exclusivo para usuários registrados ou logados.</p>
      <p> BAIXAR CS1.6<img src="games/cs"> <a href=""></a>
          BAIXAR HL2  <img src="games/hl2"><a href=""></a>
          BAIXAR CV<img src="games/cv"> <a href=""></a>
      </p>
    </section>

    <p>&copy; 2023 Happy-Games</p>
  </footer>
</body>
</html>
