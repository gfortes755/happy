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
  <!-- Seus estilos aqui... -->
  <title>Página Inicial</title>
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
      <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
      <p>Esta é a página inicial.</p>
    </section>

    <p>&copy; 2023 Seu Site</p>
  </footer>
</body>
</html>
