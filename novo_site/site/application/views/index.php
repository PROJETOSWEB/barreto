<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keyword" content="Sky admin, administrador de sites">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>template/img/ico-sky.png">
    <?php include 'includes.php'; ?>
    <title><?php echo $page_title; ?> | <?php echo $system_title; ?></title>
</head>


<body>

    <section id="container">

        <?php include 'header.php'; ?>

        <?php include 'menu.php'; ?>
        <section id="container" class="">
            <?php include "agape/".$page_name . '.php'; ?>
        </section>
        
        <?php include 'footer.php'; ?>

    </section>

</body>

</html>
