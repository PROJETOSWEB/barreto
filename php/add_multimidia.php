<?php

/* CREATE BY: Karoline Oliveira 
 * DATE: 14/02/2016
 * DESCRIPTION: adiciona parte multimida atraves do formulario.
 */

include '../conections/conexao.php';

$date = $_POST['date'];
$category = $_POST['category'];
$date = $_POST['date'];
$legenda = $_POST['legenda'];
$codigo = $_POST['codigo'];
$legenda_video = $_POST['legenda_video'];
$id = $_POST['id'];


$fileName = $_FILES["img"]["name"];
$pathAndName = "img/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);

$insert = "INSERT INTO img_empreendimento (data_img, img, legenda, codigo_video, legenda_video, categoria_id, empreendimento_id)"
        . "VALUES('$date', '$fileName', '$legenda', '$codigo', '$legenda_video', $category, $id)";

$executa_insert = mysql_query($insert) or die(mysql_error());

if ($executa_insert) {
    ?>
    <script>
        window.location.href = '../adm_empreendimento_item.php?id=<?php echo $id; ?>&respost=right';
    </script>
    <?php

}
?>

    