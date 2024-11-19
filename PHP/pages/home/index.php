<?php
// Inicia uma sessão para verificar as variáveis de sessão do usuário
session_start();

// Verifica se a variável de sessão "id_usuario" não está definida (usuário não logado)
if (!$_SESSION["id_usuario"]) {
    // Se não estiver logado (sessão inválida), redireciona o usuário para a página de login (index.php)
    header("location: ../../index.php");
    exit(); // Importante: depois de redirecionar, a execução do script é parada
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Torna a página responsiva para dispositivos móveis -->
    <title>Document</title> <!-- Título da página -->
</head>
<body>
    
    <!-- Cabeçalho que exibe o título "Home" -->
    <h2>Home</h2>

</body>
</html>
