<?php 
    echo "<h1>RECEBE</h1>";
    echo "<pre>"; print_r($_POST); echo "</pre>";

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    echo "Login: <b>$login</b><br>";
    echo "senha: <b>$senha</b>";
?>