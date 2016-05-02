<?php

/* CREATE BY: Karoline Oliveira 
 * DATE: 14/02/2016
 * DESCRIPTION: adiciona banner  atraves do formulario.
 */
include '../conections/conexao.php';


$id = $_POST['id'];

$fileName = $_FILES["img"]["name"];
$pathAndName = "img/" . $fileName;
$fileTmpLoc = $_FILES["img"]["tmp_name"];
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);

 $insert = "UPDATE empreendimento SET banner = '$fileName' WHERE empreendimento_id = $id";
$executa_insert = mysql_query($insert) or die(mysql_error());

if ($executa_insert) {
    ?>
    <script>
        window.location.href = '../adm_empreendimento_item.php?id=<?php echo $id; ?>&respost=right';
    </script>
    <?php

}
?>

    