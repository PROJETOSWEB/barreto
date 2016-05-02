<?php
session_start();
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>BARRETO empreendimentos</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,600,900&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
        <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="assets/base/img/layout/logos/ico-barreto.png"/>
    </head>
    <body class="c-layout-header-fixed">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <?php include './menu_barreto.php'; ?>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->

        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold">
                <div class="container">
                    <div class="c-page-title c-pull-left">
                        <h3 class="c-font-uppercase c-font-bold" style="color: #BCBEC0;">Área Administrativa</h3>
                    </div>
                    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                        <li>
                            Olá <?php echo $_SESSION['name']; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->


            <!-- BEGIN: PAGE CONTENT -->

            <!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-dark c-font-uppercase"><strong>


                                <?php
                                $id = $_GET['id'];
                                $sql_empreendimento_item = "SELECT * FROM empreendimento WHERE empreendimento_id = $id";
                                $executa_emp = mysql_query($sql_empreendimento_item)or die(mysql_error());
                                $row_emp = mysql_fetch_array($executa_emp);

                                echo $row_emp['nome'];
                                ?>



                            </strong></h3>
                        <div class="c-line-center c-theme-bg">
                        </div>
                    </div>

                    <div class="c-content-panel">
                        <div class="c-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="c-body">
                                        <p>
                                            <a href="javascript:;" data-toggle="modal" data-target="#add_porcentagem" class="btn btn-primary btn-xs"><i class="fa fa-line-chart"></i> Porcentagem da obra</a>
                                        <hr/ style="margin-top: 5px; margin-bottom: 7px;">
                                            <a href="javascript:;" data-toggle="modal" data-target="#add_documento" class="btn btn-primary btn-xs"><i class="fa fa-file-pdf-o"></i> Adicionar documentos</a>
                                        <hr/ style="margin-top: 5px; margin-bottom: 7px;">
                                            <a href="javascript:;" data-toggle="modal" data-target="#add_fotos" class="btn btn-primary btn-xs"><i class="fa fa-camera"></i> Adicionar fotos e vídeos</a>
                                        <hr/ style="margin-top: 5px; margin-bottom: 7px;">
                                            <a href="javascript:;" data-toggle="modal" data-target="#add_banner" class="btn btn-primary btn-xs"><i class="fa fa-image"></i> Trocar banner</a>
                                        <hr/ style="margin-top: 5px; margin-bottom: 7px;">
                                            <a href="adm_list_empreendimentos.php" class="btn c-theme-btn btn-primary btn-xs"><i class="fa fa-mail-reply"></i> voltar para lista</a>
                                        </p>
                                    </div>
                                </div>
                                <?php
                                $id_empreendimento = $_GET['id'];
                                $sql_item = "SELECT * FROM empreendimento WHERE empreendimento_id = $id_empreendimento ";
                                $executa_sqlItem = mysql_query($sql_item) or die(mysql_error());
                                $dadosEmp = mysql_fetch_array($executa_sqlItem);
                                ?>

                                <div class="col-md-8">
                                    <ul class="c-content-list-1 c-theme c-separator-dot c-square">
                                        <img src="php/img/<?php echo $dadosEmp['banner']; ?>" width="700" height="200" alt="" />
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>





                    <div class="c-content-panel">


                        <div class="c-body">
                            <h3><i class="fa fa-line-chart"></i> Andamento da obra</h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dadosEmp['porcentagem']; ?>%"><strong style="font-size: 20px;"><?php echo $dadosEmp['porcentagem']; ?>%</strong>
                                    <span class="sr-only">65% completos</span>
                                </div>
                            </div>
                        </div>


                        <div class="c-body">

                            <h3><i class="fa fa-folder-open"></i> Lista de documento para conferência</h3>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <i class="fa fa-file-pdf-o"></i>
                                                </th>
                                                <th>
                                                    DOCUMENTO
                                                </th>
                                                <th style="text-align: center;">
                                                    DATA
                                                </th>
                                                <th style="text-align: center;">
                                                    ASSUNTO
                                                </th>
                                                <th style="text-align: center;">
                                                    BAIXAR
                                                </th>
                                                <th style="text-align: center;">
                                                    EXCLUIR
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $select_doc = "SELECT * FROM doc_empreendimento WHERE empreendimento_id = $id_empreendimento";
                                            $executa_sql_doc = mysql_query($select_doc)or die(mysql_error());

                                            while ($array_doc = mysql_fetch_array($executa_sql_doc)) {
                                                ?>

                                                <tr>
                                                    <th scope="row">
                                                        •
                                                    </th>
                                                    <td>
                                                        <?php echo $array_doc['doc']; ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <?php echo $array_doc['data_doc']; ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <?php echo $array_doc['assunto']; ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="php/documentos/<?php echo $array_doc['doc']; ?>" download><span class="glyphicon glyphicon-cloud-download"> </span></a>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="#"><i class="fa fa-close"> </i></a>
                                                    </td>
                                                </tr>

                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="container">

                    <h1><i class="fa fa-photo"></i> ACOMPANHE TUDO POR FOTOS E VÍDEOS</h1>
                    <div id="filters-container" class="cbp-l-filters-button">

                        <div data-filter=".terraplenagem" class="cbp-filter-item">
                            TERRAPLENAGEM
                            <div class="cbp-filter-counter">
                            </div>
                        </div>
                        <div data-filter=".fundacao" class="cbp-filter-item">
                            FUNDAÇÃO
                            <div class="cbp-filter-counter">
                            </div>
                        </div>
                        <div data-filter=".estrutura" class="cbp-filter-item">
                            ESTRUTURA
                            <div class="cbp-filter-counter">
                            </div>
                        </div>
                        <div data-filter=".vedacao" class="cbp-filter-item">
                            VEDAÇÃO
                            <div class="cbp-filter-counter">
                            </div>
                        </div>
                        <div data-filter=".instalacoes" class="cbp-filter-item">
                            INSTALAÇÕES
                            <div class="cbp-filter-counter">
                            </div>
                        </div>
                        <div data-filter=".acabamaentos" class="cbp-filter-item">
                            ACABAMENTOS
                            <div class="cbp-filter-counter">
                            </div>
                        </div>


                        <div data-filter=".videos" class="cbp-filter-item">
                            VÍDEOS
                            <div class="cbp-filter-counter">
                            </div>
                        </div>


                    </div>
                    <div id="grid-container" class="cbp">

                        <?php
                        $id = $_GET['id'];
                        $sql_multimidia = "SELECT * FROM img_empreendimento WHERE empreendimento_id =$id ";
                        $executa_sql_mult = mysql_query($sql_multimidia)or die(mysql_error());

                        while ($row_mult = mysql_fetch_array($executa_sql_mult)) {
                            ?>
                            <div class="cbp-item terraplenagem">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="php/img/<?php echo $row_mult['img']; ?>" alt="">
                                    </div>
                                    <div class="cbp-caption-activeWrap">
                                        <div class="cbp-l-caption-alignCenter">
                                            <div class="cbp-l-caption-body">
                                                <a href="php/img/<?php echo $row_mult['img']; ?>" class="cbp-lightbox cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase" data-title="LEGENDA da foto">ampliar</a>
                                                <a href="#" class=" cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase">excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-desc">
                                    <?php echo $row_mult['legenda']; ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>






                        <!-- VIDEOS SEMPRE POR ULTIMO -->
                        <div class="cbp-item videos">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <div class="c-body">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5pfaqk1WL3Y" frameborder="0" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <a href="#" class="cbp-l-caption-buttonRight btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-uppercase">excluir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-l-grid-projects-desc">
                                LEGENDA DO VIDEO
                            </div>
                        </div>



                    </div>
                </div>



            </div>
            <!-- END: CONTENT/CONTACT/FEEDBACK-1 -->


            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
        <a name="footer"></a>

        <?php include './footer_barreto.php'; ?>
        <!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
                <script src="../assets/global/plugins/excanvas.min.js"></script> 
                <![endif]-->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/scripts/pages/4col-portfolio.js" type="text/javascript"></script>
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                App.init(); // init core    

                //init main slider
                var slider = $('.c-layout-revo-slider .tp-banner');
                var cont = $('.c-layout-revo-slider .tp-banner-container');
                var api = slider.show().revolution({
                    delay: 15000,
                    startwidth: 1170,
                    startheight: (App.getViewPort().width < App.getBreakpoint('md') ? 1024 : 620),
                    navigationType: "hide",
                    navigationArrows: "solo",
                    touchenabled: "on",
                    onHoverStop: "on",
                    keyboardNavigation: "off",
                    navigationStyle: "circle",
                    navigationHAlign: "center",
                    navigationVAlign: "center",
                    fullScreenAlignForce: "off",
                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",
                    spinner: "spinner2",
                    forceFullWidth: "on",
                    hideTimerBar: "on",
                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0,
                    videoJsPath: "rs-plugin/videojs/",
                });
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    </body>
</html>

<!-- FORMULARIO ADICIONAR PORCENTAGEM -->
<div class="modal fade c-content-login-form" id="add_porcentagem" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24  c-font-bold c-font-blue">ALTERAR PORCENTAGEM DA OBRA</h3>
                <p>
                    Altere a porcentagem conforme o andamento da obra
                </p>
                <form method="POST" action="php/add_porcentagem.php">
                    <div class="form-group">
                        <input class="form-control c-square c-theme" type="text" name="porcent" aria-describedby="basic-addon2" maxlength="2"  placeholder="porcento da obra % • somente numeros">
                        <input class="form-control c-square c-theme" value="<?php echo $_GET['id']; ?>" type="hidden" name="id" aria-describedby="basic-addon2" maxlength="2"  placeholder="porcento da obra % • somente numeros">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // FORMULARIO ADICIONAR PORCENTAGEM -->


<!-- FORMULARIO ADICIONAR DOCUMENTO -->
<div class="modal fade c-content-login-form" id="add_documento" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24  c-font-bold c-font-blue">ADICIONAR DOCUMENTOS</h3>
                <p>
                    Adicione documentos para todos os clientes deste empreendimento
                </p>
                <form method="POST" action="php/add_documento.php" enctype='multipart/form-data'>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control input-lg c-square" id="signup-email" placeholder="Título do documento">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control input-lg c-square" id="signup-username" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <input type="datetime" name="date" class="form-control input-lg c-square" id="signup-fullname" placeholder="Data">
                    </div>
                    <div class="form-group">
                        <input type="file" name="img" class="form-control input-lg c-square" id="signup-fullname" >
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // FORMULARIO ADICIONAR DOCUMENTO -->

<!-- FORMULARIO ADICIONAR DOCUMENTO -->
<div class="modal fade c-content-login-form" id="add_fotos" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24  c-font-bold c-font-blue">ADICIONAR FOTOS e VÍDEOS</h3>
                <p>
                    Adicione fotos e vídeos para todos os clientes deste empreendimento, conforme a evolução da obra
                </p>
                <form method="POST" action="php/add_multimidia.php" enctype='multipart/form-data'>

                    <div class="form-group">
                        <input type="date" name="date" class="form-control input-lg c-square" id="signup-fullname" placeholder="data • 00/00/0000">
                    </div>

                    <div class="form-group">
                        <select name="category" class="form-control input-lg c-square" id="signup-country">
                            <option value="">ESCOLHA A CATEGORIA</option>
                            <option value="">• • • • • • • • • • • • •</option>

                            <?php
                            $sql_category = "SELECT * FROM categoria";
                            $executa_sql_category = mysql_query($sql_category)or die(mysql_error());
                            while ($row_category = mysql_fetch_array($executa_sql_category)) {
                                ?>
                                <option value="<?php echo $row_category['categoria_id']; ?>"><?php echo $row_category['nome']; ?></option>

                                <?php
                            }
                            ?>

                        </select>
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="">selecione a foto</label>
                        <input type="file" name="img" class="form-control input-lg c-square" id="signup-email">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
                    </div>

                    <div class="form-group">
                        <input type="text" name="legenda" class="form-control input-lg c-square" id="signup-fullname" placeholder="legenda da foto">
                    </div>
                    <hr/>
                    <div class="form-group">
                        <label for="">Código do vídeo do youtube<br/>Ex: https://www.youtube.com/watch?v=<b style="color: #95C11F;">xxxxxxxxxxxxx</b></label>
                        <input type="text" name="codigo" class="form-control input-lg c-square" id="signup-fullname" maxlength="13" placeholder="somente código do youtube de 13 digitos">
                    </div>
                    <div class="form-group">
                        <input type="text" name="legenda_video" class="form-control input-lg c-square" id="signup-fullname" placeholder="legenda do vídeo">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // FORMULARIO ADICIONAR DOCUMENTO -->



<!-- FORMULARIO TROCAR BANNER -->
<div class="modal fade c-content-login-form" id="add_banner" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24  c-font-bold c-font-blue">ALTERAR BANNER</h3>
                <p>
                    Altere o banner deste empreendimento
                </p>
                <form method="POST" action="php/add_banner.php" enctype='multipart/form-data'>
                    <div class="form-group">
                        <input class="form-control c-square c-theme" type="file" name="img" aria-describedby="basic-addon2">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // FORMULARIO TROCAR BANNER -->

