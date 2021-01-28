<div class="titulo">Login</div>

<form action="#" method="post">
    <input type="text" name="usuario">
    <input type="password" name="senha">
    <button>Entrar</button>
</form>

<?php

session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['senha'] = $_POST['senha'];



//Cookie armazenando os dados por 30 dias
$exp = time() + 60 * 60 * 24 * 30;
setcookie('usuario', $usuario['usuario'], $exp);



if ($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}
if ($_SESSION['usuario']) {
    header('Location: exercicio.php?dir=14&file=14.03.01');
} else {
}

?>