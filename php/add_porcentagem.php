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
$id = $_POST['id'];

$insert = "UPDATE empreendimento SET porcentagem = $porcent WHERE empreendimento_id = $id";
$executa_insert = mysql_query($insert)or die(mysql_error());


if ($executa_insert) {
    ?>
    <script>
        window.location.href = '../adm_empreendimento_item.php?id=<?php echo $id; ?>&respost=right';
    </script>
    <?php
} else {
    ?>
    <script>
        window.location.href = '../adm_empreendimento_item.php?id=<?php echo $id; ?>&respost=error';
    </script>
    <?php
}
       ?>
