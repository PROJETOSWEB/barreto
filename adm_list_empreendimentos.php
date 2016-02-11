<?php
include './conections/conexao.php';

session_start();
if ((!isset($_SESSION['email']) == true) and ( !isset($_SESSION['password']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location:index.php');
}
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
                        <h3 class="c-font-uppercase c-font-bold" style="color: #BCBEC0;">Área administrativa</h3>
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
                        <div class="c-line-center c-theme-bg">
                        </div>
                    </div>




                    <div class="c-content-panel">

                        <div class="c-body">
                            <p>
                                <a href="#" class="btn c-theme-btn "><i class="glyphicon glyphicon-tower"></i> EMPREENDIMENTOS</a>
                                <a href="adm_list_clientes.php" class="btn c-theme-btn c-btn-border-2x c-btn-square"><i class="fa fa-group"></i> CLIENTES</a>
                            </p>
                        </div>
                        <hr/>

                        <div class="c-body">
                            <a href="javascript:;" data-toggle="modal" data-target="#add_empreendimento"  class="btn btn-primary btn-xs" type="button"><i class="glyphicon glyphicon-tower"></i> adicionar empreendimento</a>
                            <br/>
                            <div class="form-group" style="margin-top: -30px;">

                                <button type="submit" style="float: right;" class="btn c-theme-btn btn-sl c-btn-uppercase  c-btn-square c-btn-login">buscar</button>
                                <input type="busca_cliente" class="form-control input-sl c-square" style="width: 200px; float: right;" id="signup-fullname" placeholder="Busca de empreendimentos">

                            </div>
                            <br/><br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <i class="glyphicon glyphicon-tower"></i>
                                                </th>
                                                <th>
                                                    EMPREENDIMENTO
                                                </th>
                                                <th style="text-align: center;">
                                                    DATA
                                                </th>
                                                <th style="text-align: center;">
                                                    EDITAR
                                                </th>
                                                <th style="text-align: center;">
                                                    EXCLUIR
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql_empreendimentos = "SELECT * FROM empreendimento ORDER BY empreendimento_id DESC";
                                            $executa_sql = mysql_query($sql_empreendimentos)or die(mysql_error());
                                            $cont = 1;

                                            while ($array_empreedimento = mysql_fetch_array($executa_sql)) {
                                                ?>
                                                <tr>
                                                    <th scope="row">
                                                        <?php echo $cont++; ?>
                                                    </th>
                                                    <td>
                                                        <a href="adm_empreendimento_item.php?id=<?php echo $array_empreedimento['empreendimento_id']; ?>"><?php echo $array_empreedimento['nome']; ?></a>
                                                    </td>
                                                    <td style="text-align: center;">
                                                       <?php echo $array_empreedimento['data_inicio']; ?>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <a href="javascript:;" data-toggle="modal" data-target="#edit_empreendimento"  ><i class="fa fa-pencil"></i></a>
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


<!-- FORMULARIO ADICIONAR EMPREENDIMENTO -->
<div class="modal fade c-content-login-form" id="add_empreendimento" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24  c-font-bold c-font-blue">ADICIONAR EMPREENDIMENTO</h3>
                <p>
                    Por favor, preencha corretamente os dados para incluir um empreendimento ao sistema
                </p>

                <form method="POST" action="php/add_empreendimento.php">

                    <div class="form-group">
                        <input type="text" name="name" class="form-control input-lg c-square" id="signup-email" placeholder="Nome do empreendimento">
                    </div>

                    <div class="form-group">
                        <input type="text" name="date" class="form-control input-lg c-square" id="signup-username" placeholder="Data de inicio das obras">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control input-lg c-square" id="signup-fullname" placeholder="Endereço do empreendimento">
                    </div>
                    <div class="form-group">
                        <label for="signup-country" class="hide">cidade</label>
                        <select name="city" class="form-control input-lg c-square" id="signup-country">
                            <option value="Manaus">Manaus</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // FORMULARIO ADICIONAR EMPREENDIMENTO -->

<!-- FORMULARIO EDICÃO EMPREENDIMENTO -->
<div class="modal fade c-content-login-form" id="edit_empreendimento" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24  c-font-bold c-font-blue">EDITAR EMPREENDIMENTO</h3>
                <p>
                    Altere os dados já cadastrados
                </p>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Nome do empreendimento">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="data de inicio das obras">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Endereço do empreendimento">
                    </div>
                    <div class="form-group">
                        <label for="signup-country" class="hide">cidade</label>
                        <select class="form-control input-lg c-square" id="signup-country">
                            <option value="1">Manaus</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">salvar</button>
                        <a href="adm_empreendimento_item.php" class="c-btn-forgot"><i class="fa fa-file-text"></i> editar conteúdo</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // FORMULARIO ADICIONAR EMPREENDIMENTO -->