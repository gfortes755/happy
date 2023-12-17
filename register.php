<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["registerUsername"];
    $email = $_POST["registerEmail"];
    $password = $_POST["registerPassword"];

    // Aqui, você normalmente inseriria os dados do novo usuário no banco de dados.
    // Este é um exemplo muito básico, e você deve usar um método mais seguro em produção.

    $registeredUsers = [
        // Aqui, você teria dados de usuários armazenados no banco de dados.
        // Isso é apenas um exemplo básico para demonstração.
        ['username' => 'usuario1', 'password' => 'senha1'],
        ['username' => 'usuario2', 'password' => 'senha2']
    ];

    foreach ($registeredUsers as $user) {
        if ($user['username'] === $username) {
            echo "Nome de usuário já existe. Escolha outro.";
            exit;
        }
    }

    // Adiciona o novo usuário à lista (isso não seria feito assim em um ambiente real).
    $registeredUsers[] = ['username' => $username, 'password' => $password];

    echo "Conta criada com sucesso para $username!";
}
?>
