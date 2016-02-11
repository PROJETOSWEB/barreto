<?php

// session_start inicia a sessão
session_start();

include '../conections/conexao.php';

/* CREATE BY: Karoline Oliveira 
 * DATE: 10/02/2016
 * DESCRIPTION: Recebe dados do form, e valida login.
 */

$email = $_POST['email'];
$password = $_POST['password'];


$verifica_login = "SELECT * FROM admin WHERE email = '$email' AND senha = '$password'";
$executa_verifica_login = mysql_query($verifica_login)or die(mysql_error());


$array_dados = mysql_fetch_array($executa_verifica_login);


if (mysql_num_rows($executa_verifica_login) > 0) {

    $_SESSION['password'] = $password;
    $_SESSION['email'] = $array_dados['email'];;
    $_SESSION['name'] = $array_dados['nome'];
    $_SESSION['id'] = $array_dados['admin_id'];
    ?>
    <script>
        window.location.href = 'adm_list_empreendimentos.php';
    </script>

    <?php

} else {


    unset($_SESSION['name']);
    unset($_SESSION['id']);

    echo "Usuario ou senha invalidos";
    // header('location:../index.php?result=erro');
}
?>



