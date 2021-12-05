<?php
loadModel('Login');

if (count($_POST)) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        echo "Usuário {$user->name} logado";
    } catch(Exception $e) {
        echo 'Falha no login';
    }
}

loadView('login');