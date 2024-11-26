<?php
// Inicia uma sessão para verificar as variáveis de sessão do usuário
session_start();

// Verifica se a variável de sessão "id_usuario" não está definida (usuário não logado)
if (!$_SESSION["id_usuario"]) {
    // Se não estiver logado (sessão inválida), redireciona o usuário para a página de login (index.php)
    header("location: ../../index.php");
    exit(); // Importante: depois de redirecionar, a execução do script é parada
}

require_once __DIR__ . "/../../backend/controller/userController.php";
$userController = new UserController();
$usuarios = $userController->GetAllUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Torna a página responsiva para dispositivos móveis -->
    <title>Document</title> <!-- Título da página -->
    <link rel="stylesheet" href="stle.css"> <!-- Arquivo css -->
</head>
<body>

    <div class="container" >
    <!-- Cabeçalho que exibe o título "Home" -->
    <h2>Lista de Usuário</h2>
    <table border =1>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Ação</th>
        </tr>

        <a href="../cadastrar/index.php">cadastrar</a>
        <?php foreach($usuarios as $usuario):?>
            <tr>
                <td><?php   echo $usuario["id"]  ?></td>
                <td><?php   echo $usuario["nome"]  ?></td>
                <td><?php   echo $usuario["senha"]  ?></td>
                <td>
                    <a href="../cadastrar/index.php?id=<?php echo $usuario["id"]?>">Editar</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    </div>

    
</body>
</html>
<?php     ?>
<!-- http://localhost/senac/pages/home/index.php -->