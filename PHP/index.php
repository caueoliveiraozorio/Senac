<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Torna a página responsiva para dispositivos móveis -->
    <title>Login</title> <!-- Título da página -->
</head>
<body>
    <!-- Formulário de login -->
    <form method="post"> <!-- O formulário envia dados via método POST -->
        <label>Nome</label> <!-- Rótulo para o campo de nome -->
        <input type="text" name="nome" id="nome"> <!-- Campo de entrada de texto para o nome do usuário -->
        <label>Senha</label> <!-- Rótulo para o campo de senha -->
        <input type="password" name="senha" id="senha"> <!-- Campo de entrada de senha -->
        <button type="submit">Entrar</button> <!-- Botão de envio do formulário -->
    </form>
</body>
</html>

<?php

// Inclui o controlador de login para processar a autenticação
require_once __DIR__ . "/backend/controller/loginController.php";

// Cria uma instância do controlador de login
$loginController = new LoginController();

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Recupera os dados do formulário (nome e senha)
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Verifica se os campos estão vazios
    if (empty($nome) || empty($senha)) {
        echo "Todos os campos são obrigatórios"; // Exibe mensagem de erro caso algum campo esteja vazio
    } else {

        // Tenta autenticar o usuário usando o controlador de login
        if ($loginController->Login($nome, $senha)) {
            // Se o login for bem-sucedido, redireciona o usuário para a página inicial
            header("location: ./pages/home/index.php");
            exit(); // Evita que o código continue executando após o redirecionamento
        } else {
            // Se o login falhar, exibe uma mensagem de erro
            echo "Usuário inválido"; // Mensagem de erro caso o login seja inválido
        }
    }
}

?>
