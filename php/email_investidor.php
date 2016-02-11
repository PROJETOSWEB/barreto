<?php

/* CREATE BY: Karoline Oliveira 
 * DATE: 10/02/2016
 * DESCRIPTION: Envia informações do formulario de investidor, para os emails relacionados.
 */

$nameComplete = $_POST['nameComplete'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];


$emailsender = $email;
$emaildestinatario = "karolfurletti@gmail.com";

/* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
if (PHP_OS == "Linux")
    $quebra_linha = "\n"; //Se for Linux
elseif (PHP_OS == "WINNT")
    $quebra_linha = "\r\n"; // Se for Windows
else
    die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");


/* Monta o corpo do email */

$mensagemHTML = "<p>INVESTIDOR</p>";
$mensagemHTML .= "<hr>";
$mensagemHTML .= "<p><b>Nome:</b> $nameComplete </p>";
$mensagemHTML .= "<p><b>Email:</b> $email </p>";
$mensagemHTML .= "<p><b>Telefone:</b> $telephone </p>";
$mensagemHTML .= "<hr>";


/* Montando o cabeçalho da mensagem */
$headers = "MIME-Version: 1.1" . $quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1" . $quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender . $quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
// Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
// Se não houver um valor, o item não deverá ser especificado.
if (strlen($comcopia) > 0)
    $headers .= "Cc: " . $comcopia . $quebra_linha;
if (strlen($comcopiaoculta) > 0)
    $headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)

/* Enviando a mensagem */
$resposta = mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r" . $emailsender);

if ($resposta) {
    ?>

    <script>
        window.location.href = '../index.php?r=certo'

    </script>

    <?php
} else {
    ?>

    <script>
        window.location.href = '../index.php?r=erro'
    </script>

    <?php
}