<?php

/* CREATE BY: Karoline Oliveira 
 * DATE: 10/02/2016
 * DESCRIPTION: adiciona cliente, atraves do form.
 */

include '../conections/conexao.php';

session_start();
if ((!isset($_SESSION['email']) == true) and ( !isset($_SESSION['password']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location:index.php');
}

$id = $_SESSION['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$number = $_POST['number'];
$password = $_POST['password'];
$empreendimento = $_POST['empreendimento'];


$insert = "INSERT INTO cliente (nome, email, telefone, numero_contrato, senha, empreendimento_id, admin_id)"
        . "VALUES ('$name', '$email', '$fone', $number, '$password', $empreendimento, $id)";

$executa_insert = mysql_query($insert)or die(mysql_error());

if ($executa_insert) {
    ?>
    <script>
        window.location.href = '../adm_list_clientes.php?respost=right';
    </script>
    <?php

} else {
    ?>
    <script>
        window.location.href = '../adm_list_clientes.php?respost=error';
    </script>
    <?php
}


