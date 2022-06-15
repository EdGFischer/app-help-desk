<?php

session_start();

//Variavel de autenticação de Usúario
$usuario_autenticado = false;

//Usúarios do Sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => '987456'),
);

//Percoreendo Array para Validação do Usúario

foreach($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado) {
    echo 'usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro0');
}
/*
print_r($_POST);
echo '<br />';
echo $_POST['email'];
echo '<br />';
echo $_POST['senha'];
echo '<br />';
*/
?>