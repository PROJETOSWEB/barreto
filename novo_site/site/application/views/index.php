<html>
<head>
    <meta charset="utf-8"/>
    <title>BARRETO empreendimentos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>template/assets/base/img/layout/logos/ico-barreto.png"/>

    <?php include 'includes.php'; ?>
    <title><?php echo $page_title; ?> | <?php echo $system_title; ?></title>
</head>


<body class="c-layout-header-fixed">

    <?php include 'menu.php'; ?>

    <div class="c-layout-page">
        <?php include "barreto/" . $page_name . '.php'; ?>
        <?php include 'footer.php'; ?>
    </div>

</body>
</html>
