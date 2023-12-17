<?php
session_start();

// Verificar se o usuário está autenticado, caso contrário, redirecionar para a página de login.
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Aqui, você pode adicionar lógica para processar o envio do vídeo se o formulário for enviado.

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cockium</title>
    <link rel="stylesheet" href="css/style.css">
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

    <section>
        <h1>Página de Vídeos</h1>
        
        <?php
        // Verificar se o usuário está autenticado para exibir o botão e o player de vídeo.
        if (isset($_SESSION['username'])) {
            echo '<button onclick="openVideoForm()">Enviar Vídeo</button>';
            echo '<div id="videoPlayer" style="display: none;">';
            // Aqui, você pode adicionar o player de vídeo.
            echo '<video width="400" height="300" controls>
                    <source src="video.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>';
            echo '</div>';
        } else {
            echo '<p>Faça login para enviar vídeos e assistir!</p>';
        }
        ?>
    </section>

    <script>
        function openVideoForm() {
            // Adicione aqui a lógica para exibir o formulário de envio de vídeo.
            alert("Implemente a lógica para o formulário de envio de vídeo!");
        }
    </script>

</body>
</html>
