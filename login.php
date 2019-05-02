<?php require_once("banco-usuario.php"); require_once("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if($usuario == null) {
    $_SESSION["danger"] = "Usuário ou senha inválidos";
    header("Location: /");
} else {
    $_SESSION["sucess"] = "Usuário logado com sucesso.";
    logaUsuario($usuario["email"]);
    header("Location: /");
}
die();