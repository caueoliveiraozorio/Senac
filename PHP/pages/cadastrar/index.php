<?php   
require_once __DIR__ . "/../../backend/controller/userController.php";

$UserController = new UserController();

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $usuario = $UserController->GetUserById($id);
}

if($_SERVER["REQUEST_METHOD"]=="POST" ){
    $nome = $_POST["name"];
    $senha = $_POST["password"];

    if (empty($nome) || empty($senha)) {
        echo "Todos os campos são obrigatórios"; 
    } else {
        $UserController->CreateUser($nome,$senha);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="name" placeholder="Name" value="<?php echo $usuario["nome"] ?>" >

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" placeholder="Senha" value="<?php echo $usuario["senha"] ?>" ?> >


        <button type="submit">cadastrar</button>
    </form>
</body>
</html>