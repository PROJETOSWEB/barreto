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

$porcent = $_POST['porcent'];

$insert = "INSERT INTO empreendimento (porcentagem)VALUES($porcent)";
$executa_insert = mysql_query($insert)or die(mysql_error());
       