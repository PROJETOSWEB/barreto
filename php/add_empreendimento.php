<?php

/* CREATE BY: Karoline Oliveira 
 * DATE: 10/02/2016
 * DESCRIPTION: adiciona empreendimentos, atraves do form.
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
$date = $_POST['date'];
$andress = $_POST['address'];
$city = $_POST['city'];

$insert = "INSERT INTO empreendimento (nome, data_inicio, endereco, cidade, admin_id)"
        . "VALUES ('$name', '$date', '$andress', '$city', $id)";

$executa_insert = mysql_query($insert)or die(mysql_error());

if ($executa_insert) {
    ?>
    <script>
        window.location.href = '../adm_list_empreendimentos.php?respost=right';
    </script>
    <?php

} else {
    ?>
    <script>
        window.location.href = '../adm_list_empreendimentos.php?respost=error';
    </script>
    <?php
}


