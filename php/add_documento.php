<?php

/* CREATE BY: Karoline Oliveira 
 * DATE: 14/02/2016
 * DESCRIPTION: adiciona documentos atraves do formulario.
 */

include '../conections/conexao.php';

$title = $_POST['title'];
$subject = $_POST['subject'];
$date = $_POST['date'];
$id = $_POST['id'];

$fileName = $_FILES["img"]["name"];
$pathAndName = "documentos/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);

$insert = "INSERT INTO doc_empreendimento (titulo, assunto, data_doc, doc, empreendimento_id)"
        . "VALUES('$title', '$subject', '$date', '$fileName', $id)";

$executa_insert = mysql_query($insert) or die(mysql_error());

if ($executa_insert) {
    ?>
    <script>
        window.location.href = '../adm_empreendimento_item.php?id=<?php echo $id; ?>&respost=right';
    </script>
    <?php

}
?>

    