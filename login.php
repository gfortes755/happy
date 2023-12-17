<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["loginUsername"];
    $password = $_POST["loginPassword"];

    // Consulta ao banco de dados (substitua isso por seu método de consulta real).
    $registeredUsers = [
        // Aqui, você teria dados de usuários armazenados no banco de dados.
        // Isso é apenas um exemplo básico para demonstração.
        ['username' => 'usuario1', 'password_hash' => password_hash('senha1', PASSWORD_DEFAULT)],
        ['username' => 'usuario2', 'password_hash' => password_hash('senha2', PASSWORD_DEFAULT)]
    ];

    foreach ($registeredUsers as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password_hash'])) {
            // Iniciar a sessão e armazenar dados do usuário, se necessário.
            $_SESSION['username'] = $username;
            echo "Login bem-sucedido para $username!";
            exit;
        }
    }

    echo "Nome de usuário ou senha incorretos.";
}
?>
